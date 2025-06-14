<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Branch;
use App\Models\Product;

class InventoryReportViewer extends Component
{
    public $branchId = null;
    public $productId = null;
    public $inventoryData = [];
    public $branches = [];
    public $products = [];

    public function mount()
    {
        $this->branches = Branch::all();
        $this->products = Product::all();
    }

    public function generateReport()
    {
        $query = Product::query();

        if ($this->branchId) {
            $query->where('branch_id', $this->branchId);
        }

        if ($this->productId) {
            $query->where('id', $this->productId);
        }

        $this->inventoryData = $query->get()->map(function ($product) {
            return [
                'product' => $product,
                'current_stock' => $product->quantity,
                'inventory_value' => $product->quantity * $product->price,
            ];
        })->toArray();
    }

    public function render()
    {
        return view('livewire.inventory-report-viewer');
    }
}
