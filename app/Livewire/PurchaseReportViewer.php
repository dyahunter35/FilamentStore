<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PurchaseInvoice;
use App\Models\Branch;
use App\Models\Product;
use App\Models\Supplier;

class PurchaseReportViewer extends Component
{
    public $startDate;
    public $endDate;
    public $branchId = null;
    public $productId = null;
    public $supplierId = null;
    public $purchaseInvoices = [];
    public $branches = [];
    public $products = [];
    public $suppliers = [];

    public function mount()
    {
        $this->startDate = now()->startOfMonth()->toDateString();
        $this->endDate = now()->endOfMonth()->toDateString();
        $this->branches = Branch::all();
        $this->products = Product::all();
        $this->suppliers = Supplier::all();
    }

    public function generateReport()
    {
        $query = PurchaseInvoice::query();

        if ($this->startDate && $this->endDate) {
            $query->whereBetween('date', [$this->startDate, $this->endDate]);
        }

        if ($this->branchId) {
            $query->where('branch_id', $this->branchId);
        }

        if ($this->productId) {
            // This requires joining with purchase_invoice_items table
            $query->whereHas('items', function ($query) {
                $query->where('product_id', $this->productId);
            });
        }

        if ($this->supplierId) {
            $query->where('supplier_id', $this->supplierId);
        }

        $this->purchaseInvoices = $query->with(['supplier', 'branch', 'items.product'])->get();
    }

    public function render()
    {
        return view('livewire.purchase-report-viewer');
    }
}
