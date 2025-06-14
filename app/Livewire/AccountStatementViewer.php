<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\SalesInvoice;
use App\Models\SalesReturn;
use App\Models\PurchaseInvoice;
use App\Models\PurchaseReturn;
use Carbon\Carbon;

class AccountStatementViewer extends Component
{
    public $entityType = 'customer'; // 'customer' or 'supplier'
    public $entityId = null;
    public $startDate;
    public $endDate;
    public $transactions = [];
    public $customers = [];
    public $suppliers = [];

    public function mount()
    {
        $this->customers = Customer::all();
        $this->suppliers = Supplier::all();
        $this->startDate = now()->startOfMonth()->toDateString();
        $this->endDate = now()->endOfMonth()->toDateString();
    }

    public function generateStatement()
    {
        $this->transactions = [];

        if ($this->entityType === 'customer' && $this->entityId) {
            $salesInvoices = SalesInvoice::where('customer_id', $this->entityId)
                ->whereBetween('date', [$this->startDate, $this->endDate])
                ->get()
                ->map(function ($invoice) {
                    return [
                        'date' => $invoice->date,
                        'type' => 'Sales Invoice',
                        'number' => $invoice->id,
                        'amount' => $invoice->final_amount,
                        'balance' => null, // Will calculate later
                    ];
                });

            $salesReturns = SalesReturn::where('customer_id', $this->entityId) // Assuming SalesReturn has customer_id
                ->whereBetween('date', [$this->startDate, $this->endDate])
                ->get()
                ->map(function ($return) {
                    return [
                        'date' => $return->date,
                        'type' => 'Sales Return',
                        'number' => $return->id,
                        'amount' => -$return->amount, // Negative for returns
                        'balance' => null, // Will calculate later
                    ];
                });

            $this->transactions = $salesInvoices->concat($salesReturns)->sortBy('date')->values()->toArray();

        } elseif ($this->entityType === 'supplier' && $this->entityId) {
            $purchaseInvoices = PurchaseInvoice::where('supplier_id', $this->entityId)
                ->whereBetween('date', [$this->startDate, $this->endDate])
                ->get()
                ->map(function ($invoice) {
                    return [
                        'date' => $invoice->date,
                        'type' => 'Purchase Invoice',
                        'number' => $invoice->id,
                        'amount' => $invoice->final_amount,
                        'balance' => null, // Will calculate later
                    ];
                });

            $purchaseReturns = PurchaseReturn::where('supplier_id', $this->entityId) // Assuming PurchaseReturn has supplier_id
                ->whereBetween('date', [$this->startDate, $this->endDate])
                ->get()
                ->map(function ($return) {
                    return [
                        'date' => $return->date,
                        'type' => 'Purchase Return',
                        'number' => $return->id,
                        'amount' => -$return->amount, // Negative for returns
                        'balance' => null, // Will calculate later
                    ];
                });

             $this->transactions = $purchaseInvoices->concat($purchaseReturns)->sortBy('date')->values()->toArray();
        }

        // Calculate running balance
        $balance = 0;
        foreach ($this->transactions as $key => $transaction) {
            $balance += $transaction['amount'];
            $this->transactions[$key]['balance'] = $balance;
        }
    }

    public function render()
    {
        return view('livewire.account-statement-viewer');
    }
}
