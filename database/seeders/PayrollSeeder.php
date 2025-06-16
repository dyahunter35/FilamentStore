<?php

namespace Database\Seeders;

use App\Models\Payroll;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PayrollSeeder extends Seeder
{
    public function run(): void
    {
        $employees = [
            1 => ['salary' => 75000, 'name' => 'Alice Johnson'],
            2 => ['salary' => 85000, 'name' => 'Bob Smith'],
            3 => ['salary' => 65000, 'name' => 'Carol Davis'],
            4 => ['salary' => 55000, 'name' => 'David Wilson'],
            5 => ['salary' => 60000, 'name' => 'Eva Brown'],
        ];

        // Generate payroll for last 3 months
        for ($month = 2; $month >= 0; $month--) {
            $payPeriodStart = Carbon::now()->subMonths($month)->startOfMonth();
            $payPeriodEnd = Carbon::now()->subMonths($month)->endOfMonth();
            $paymentDate = $payPeriodEnd->copy()->addDays(5);

            foreach ($employees as $employeeId => $employeeData) {
                $basicSalary = $employeeData['salary'] / 12; // Monthly salary
                $overtimeHours = rand(0, 20);
                $overtimeRate = $basicSalary / 160; // Assuming 160 working hours per month
                $overtimeAmount = $overtimeHours * $overtimeRate * 1.5; // 1.5x overtime rate

                $allowances = rand(200, 800);
                $bonuses = $month === 0 ? rand(500, 2000) : 0; // Bonus only in current month

                $grossSalary = $basicSalary + $overtimeAmount + $allowances + $bonuses;

                // Calculate deductions
                $taxDeduction = $grossSalary * 0.15; // 15% tax
                $insuranceDeduction = $grossSalary * 0.05; // 5% insurance
                $loanDeduction = in_array($employeeId, [1, 2, 3, 5]) ? rand(400, 500) : 0; // Loan deduction for some employees
                $otherDeductions = rand(0, 200);

                $totalDeductions = $taxDeduction + $insuranceDeduction + $loanDeduction + $otherDeductions;
                $netSalary = $grossSalary - $totalDeductions;

                $status = 'paid';
                if ($month === 0) {
                    $status = rand(1, 3) === 1 ? 'pending' : 'approved';
                }

                Payroll::create([
                    'employee_id' => $employeeId,
                    'pay_period_start' => $payPeriodStart->format('Y-m-d'),
                    'pay_period_end' => $payPeriodEnd->format('Y-m-d'),
                    'basic_salary' => round($basicSalary, 2),
                    'overtime_hours' => $overtimeHours,
                    'overtime_rate' => round($overtimeRate, 2),
                    'overtime_amount' => round($overtimeAmount, 2),
                    'allowances' => $allowances,
                    'bonuses' => $bonuses,
                    'gross_salary' => round($grossSalary, 2),
                    'tax_deduction' => round($taxDeduction, 2),
                    'insurance_deduction' => round($insuranceDeduction, 2),
                    'loan_deduction' => $loanDeduction,
                    'other_deductions' => $otherDeductions,
                    'total_deductions' => round($totalDeductions, 2),
                    'net_salary' => round($netSalary, 2),
                    'payment_date' => $status === 'paid' ? $paymentDate->format('Y-m-d') : null,
                    'notes' => $bonuses > 0 ? 'Includes performance bonus' : null,
                    'status' => $status,
                ]);
            }
        }
    }
}
