<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Customer;
use App\Models\SalesInvoice;
use App\Models\SalesInvoiceItem;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PosComponent extends Component
{
    public $search = '';
    public $cart = [];
    public $customer_id = null;
    public $quantity = 1;
    public $products = [];
    public $customers = [];
    public $total = 0;
    public $barcode = '';

    public function mount()
    {
        $this->customers = Customer::all();
    }

    public function updatedSearch()
    {
        $this->products = Product::where('name', 'like', "%{$this->search}%")
            ->orWhere('barcode', 'like', "%{$this->search}%")
            ->limit(10)
            ->get();
    }

    public function addToCart($productId)
    {
        $product = Product::find($productId);
        if (!$product) return;
        $key = array_search($productId, array_column($this->cart, 'id'));
        if ($key !== false) {
            $this->cart[$key]['quantity'] += $this->quantity;
        } else {
            $this->cart[] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $this->quantity,
            ];
        }
        $this->calculateTotal();
        $this->search = '';
        $this->products = [];
        $this->quantity = 1;
    }

    public function removeFromCart($index)
    {
        unset($this->cart[$index]);
        $this->cart = array_values($this->cart);
        $this->calculateTotal();
    }

    public function updateQuantity($index, $quantity)
    {
        $this->cart[$index]['quantity'] = max(1, (int)$quantity);
        $this->calculateTotal();
    }

    public function calculateTotal()
    {
        $this->total = collect($this->cart)->sum(function($item) {
            return $item['price'] * $item['quantity'];
        });
    }

    public function processPayment()
    {
        if (empty($this->cart)) {
            session()->flash('error', 'Cart is empty!');
            return;
        }
        DB::beginTransaction();
        try {
            $invoice = SalesInvoice::create([
                'customer_id' => $this->customer_id,
                'date' => Carbon::now(),
                'total_amount' => $this->total,
                'discount' => 0,
                'final_amount' => $this->total,
                'status' => 'paid',
                'branch_id' => auth()->user()->branches()->first()->id ?? null,
            ]);
            foreach ($this->cart as $item) {
                SalesInvoiceItem::create([
                    'sales_invoice_id' => $invoice->id,
                    'product_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'unit_price' => $item['price'],
                    'subtotal' => $item['price'] * $item['quantity'],
                ]);
                // Decrement product quantity
                $product = Product::find($item['id']);
                if ($product) {
                    $product->quantity = max(0, $product->quantity - $item['quantity']);
                    $product->save();
                }
            }
            DB::commit();
            $this->cart = [];
            $this->total = 0;
            session()->flash('success', 'Sale completed and inventory updated!');
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Error processing sale: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.pos-component', [
            'customers' => $this->customers,
        ]);
    }
}
