<?php

namespace Database\Seeders;

use App\Models\EmployeeLoan;
use Illuminate\Database\Seeder;

class EmployeeLoanSeeder extends Seeder
{
    public function run(): void
    {
        $loans = [
            [
                'employee_id' => 1, // Alice Johnson
                'loan_amount' => 10000.00,
                'interest_rate' => 5.0,
                'loan_term' => 24, // 24 months
                'monthly_payment' => 438.71,
                'remaining_balance' => 8500.00,
                'start_date' => '2023-06-01',
                'end_date' => '2025-05-31',
                'purpose' => 'Home renovation',
                'notes' => 'Approved for home improvement project',
                'status' => 'active',
            ],
            [
                'employee_id' => 2, // Bob Smith
                'loan_amount' => 15000.00,
                'interest_rate' => 4.5,
                'loan_term' => 36, // 36 months
                'monthly_payment' => 445.21,
                'remaining_balance' => 12000.00,
                'start_date' => '2023-03-15',
                'end_date' => '2026-02-14',
                'purpose' => 'Car purchase',
                'notes' => 'Vehicle loan for reliable transportation',
                'status' => 'active',
            ],
            [
                'employee_id' => 3, // Carol Davis
                'loan_amount' => 5000.00,
                'interest_rate' => 6.0,
                'loan_term' => 12, // 12 months
                'monthly_payment' => 430.33,
                'remaining_balance' => 2500.00,
                'start_date' => '2023-09-01',
                'end_date' => '2024-08-31',
                'purpose' => 'Medical expenses',
                'notes' => 'Emergency medical loan',
                'status' => 'active',
            ],
            [
                'employee_id' => 4, // David Wilson
                'loan_amount' => 8000.00,
                'interest_rate' => 5.5,
                'loan_term' => 18, // 18 months
                'monthly_payment' => 471.78,
                'remaining_balance' => 0.00,
                'start_date' => '2022-12-01',
                'end_date' => '2024-05-31',
                'purpose' => 'Education expenses',
                'notes' => 'Professional certification courses',
                'status' => 'completed',
            ],
            [
                'employee_id' => 5, // Eva Brown
                'loan_amount' => 12000.00,
                'interest_rate' => 4.0,
                'loan_term' => 30, // 30 months
                'monthly_payment' => 421.45,
                'remaining_balance' => 10500.00,
                'start_date' => '2023-08-01',
                'end_date' => '2026-01-31',
                'purpose' => 'Debt consolidation',
                'notes' => 'Consolidating multiple debts',
                'status' => 'active',
            ],
            [
                'employee_id' => 1, // Alice Johnson (second loan)
                'loan_amount' => 3000.00,
                'interest_rate' => 7.0,
                'loan_term' => 6, // 6 months
                'monthly_payment' => 521.13,
                'remaining_balance' => 3000.00,
                'start_date' => '2024-02-01',
                'end_date' => '2024-07-31',
                'purpose' => 'Emergency expenses',
                'notes' => 'Short-term emergency loan',
                'status' => 'pending',
            ],
            [
                'employee_id' => 6, // Frank Miller
                'loan_amount' => 20000.00,
                'interest_rate' => 3.5,
                'loan_term' => 48, // 48 months
                'monthly_payment' => 449.04,
                'remaining_balance' => 0.00,
                'start_date' => '2021-01-01',
                'end_date' => '2024-12-31',
                'purpose' => 'Home purchase down payment',
                'notes' => 'Loan cancelled due to employee termination',
                'status' => 'cancelled',
            ],
            [
                'employee_id' => 2, // Bob Smith (second loan request)
                'loan_amount' => 7500.00,
                'interest_rate' => 5.0,
                'loan_term' => 15, // 15 months
                'monthly_payment' => 530.33,
                'remaining_balance' => 7500.00,
                'start_date' => '2024-03-01',
                'end_date' => '2025-05-31',
                'purpose' => 'Home appliances',
                'notes' => 'Pending approval from HR department',
                'status' => 'pending',
            ],
        ];

        foreach ($loans as $loan) {
            EmployeeLoan::create($loan);
        }
    }
}
