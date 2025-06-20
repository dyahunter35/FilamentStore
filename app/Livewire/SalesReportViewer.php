<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SalesInvoice;
use App\Models\Branch;
use App\Models\Product;
use App\Models\Customer;

class SalesReportViewer extends Component
{
    public $startDate;
    public $endDate;
    public $branchId = null;
    public $productId = null;
    public $customerId = null;
    public $salesInvoices = [];
    public $branches = [];
    public $products = [];
    public $customers = [];

    public function mount()
    {
        $this->startDate = now()->startOfMonth()->toDateString();
        $this->endDate = now()->endOfMonth()->toDateString();
        $this->branches = Branch::all();
        $this->products = Product::all();
        $this->customers = Customer::all();
    }

    public function generateReport()
    {
        $query = SalesInvoice::query();

        if ($this->startDate && $this->endDate) {
            $query->whereBetween('date', [$this->startDate, $this->endDate]);
        }

        if ($this->branchId) {
            $query->where('branch_id', $this->branchId);
        }

        if ($this->productId) {
            // This requires joining with sales_invoice_items table
            $query->whereHas('items', function ($query) {
                $query->where('product_id', $this->productId);
            });
        }

        if ($this->customerId) {
            $query->where('customer_id', $this->customerId);
        }

        $this->salesInvoices = $query->with(['customer', 'branch', 'items.product'])->get();
    }

    public function render()
    {
        return view('livewire.sales-report-viewer');
    }
}
