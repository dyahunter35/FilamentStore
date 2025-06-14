<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Branch;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use Illuminate\Support\Carbon;

class ExpenseReport extends Component
{
    public $branches;
    public $categories;
    public $branchId = '';
    public $categoryId = '';
    public $dateFrom;
    public $dateTo;

    public $total = 0;
    public $byCategory = [];
    public $byBranch = [];

    public function mount()
    {
        $this->branches = Branch::all();
        $this->categories = ExpenseCategory::all();
        $this->dateFrom = now()->startOfMonth()->toDateString();
        $this->dateTo = now()->toDateString();
        $this->updateReport();
    }

    public function updated($property)
    {
        $this->updateReport();
    }

    public function updateReport()
    {
        $query = Expense::query();
        if ($this->branchId) {
            $query->where('branch_id', $this->branchId);
        }
        if ($this->categoryId) {
            $query->where('category_id', $this->categoryId);
        }
        if ($this->dateFrom) {
            $query->where('date', '>=', $this->dateFrom);
        }
        if ($this->dateTo) {
            $query->where('date', '<=', $this->dateTo);
        }
        $this->total = $query->sum('amount');
        $this->byCategory = $query->clone()->selectRaw('category_id, SUM(amount) as total')->groupBy('category_id')->with('category')->get();
        $this->byBranch = $query->clone()->selectRaw('branch_id, SUM(amount) as total')->groupBy('branch_id')->with('branch')->get();
    }

    public function render()
    {
        return view('livewire.expense-report');
    }
}
