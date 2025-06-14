<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\EmployeeLoan;
use App\Models\Payroll;
use App\Models\Branch;

class PayrollCalculator extends Component
{
    public $month;
    public $year;
    public $branch_id;
    public $employees = [];
    public $bonuses = [];
    public $payrollRows = [];
    public $totalPayroll = 0;
    public $showTable = false;

    public function mount()
    {
        $this->month = now()->month;
        $this->year = now()->year;
        $this->branch_id = Branch::first()?->id;
    }

    public function updatedBranchId()
    {
        $this->showTable = false;
    }

    public function calculatePayroll()
    {
        $this->employees = Employee::where('branch_id', $this->branch_id)->get();
        $this->payrollRows = [];
        $this->totalPayroll = 0;
        foreach ($this->employees as $employee) {
            $baseSalary = $employee->salary;
            $attendanceCount = Attendance::where('employee_id', $employee->id)
                ->whereMonth('date', $this->month)
                ->whereYear('date', $this->year)
                ->count();
            $workingDays = now()->setMonth($this->month)->setYear($this->year)->daysInMonth;
            $absentDays = $workingDays - $attendanceCount;
            $salaryDeduction = ($baseSalary / $workingDays) * $absentDays;
            $loan = EmployeeLoan::where('employee_id', $employee->id)
                ->where('remaining_amount', '>', 0)
                ->first();
            $loanDeduction = $loan ? min($loan->deduction_amount_per_month, $loan->remaining_amount) : 0;
            $bonus = $this->bonuses[$employee->id] ?? 0;
            $netPay = $baseSalary - $salaryDeduction - $loanDeduction + $bonus;
            $this->payrollRows[] = [
                'employee' => $employee,
                'baseSalary' => $baseSalary,
                'salaryDeduction' => $salaryDeduction,
                'loanDeduction' => $loanDeduction,
                'bonus' => $bonus,
                'netPay' => $netPay,
            ];
            $this->totalPayroll += $netPay;
        }
        $this->showTable = true;
    }

    public function savePayroll()
    {
        $payroll = Payroll::create([
            'month' => $this->month,
            'year' => $this->year,
            'total_amount' => $this->totalPayroll,
            'branch_id' => $this->branch_id,
        ]);
        // Optionally, save details per employee in a related table
        session()->flash('success', 'Payroll saved successfully!');
        $this->showTable = false;
    }

    public function render()
    {
        return view('livewire.payroll-calculator', [
            'branches' => Branch::all(),
        ]);
    }
}
