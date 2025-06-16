<?php

namespace Database\Seeders;

use App\Models\Expense;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    public function run(): void
    {
        $expenses = [
            [
                'title' => 'Office Printer Ink Cartridges',
                'description' => 'Replacement ink cartridges for office printers',
                'amount' => 150.00,
                'category_id' => 1, // Office Supplies
                'expense_date' => '2024-01-15',
                'payment_method' => 'credit_card',
                'reference_number' => 'EXP-2024-001',
                'vendor' => 'Office Depot',
                'notes' => 'Urgent replacement for main office printer',
                'status' => 'paid',
            ],
            [
                'title' => 'Business Trip to New York',
                'description' => 'Flight and hotel expenses for client meeting',
                'amount' => 1200.00,
                'category_id' => 2, // Travel & Transportation
                'expense_date' => '2024-01-20',
                'payment_method' => 'bank_transfer',
                'reference_number' => 'EXP-2024-002',
                'vendor' => 'Delta Airlines & Marriott Hotel',
                'notes' => 'Client meeting with ABC Corporation',
                'status' => 'approved',
            ],
            [
                'title' => 'Google Ads Campaign',
                'description' => 'Monthly Google Ads advertising spend',
                'amount' => 800.00,
                'category_id' => 3, // Marketing & Advertising
                'expense_date' => '2024-01-25',
                'payment_method' => 'credit_card',
                'reference_number' => 'EXP-2024-003',
                'vendor' => 'Google LLC',
                'notes' => 'January marketing campaign',
                'status' => 'paid',
            ],
            [
                'title' => 'Monthly Internet Bill',
                'description' => 'Office internet and phone services',
                'amount' => 250.00,
                'category_id' => 4, // Utilities
                'expense_date' => '2024-01-30',
                'payment_method' => 'bank_transfer',
                'reference_number' => 'EXP-2024-004',
                'vendor' => 'Verizon Business',
                'notes' => 'Monthly recurring expense',
                'status' => 'paid',
            ],
            [
                'title' => 'New Laptop for Developer',
                'description' => 'MacBook Pro for new software developer',
                'amount' => 2500.00,
                'category_id' => 5, // Equipment & Software
                'expense_date' => '2024-02-01',
                'payment_method' => 'check',
                'reference_number' => 'EXP-2024-005',
                'vendor' => 'Apple Store',
                'notes' => 'Equipment for new hire Bob Smith',
                'status' => 'approved',
            ],
            [
                'title' => 'Legal Consultation',
                'description' => 'Contract review and legal advice',
                'amount' => 500.00,
                'category_id' => 6, // Professional Services
                'expense_date' => '2024-02-05',
                'payment_method' => 'bank_transfer',
                'reference_number' => 'EXP-2024-006',
                'vendor' => 'Smith & Associates Law Firm',
                'notes' => 'Contract review for new client agreement',
                'status' => 'pending',
            ],
            [
                'title' => 'Client Dinner Meeting',
                'description' => 'Dinner with potential client at upscale restaurant',
                'amount' => 180.00,
                'category_id' => 7, // Meals & Entertainment
                'expense_date' => '2024-02-08',
                'payment_method' => 'credit_card',
                'reference_number' => 'EXP-2024-007',
                'vendor' => 'The Capital Grille',
                'notes' => 'Business development meeting',
                'status' => 'paid',
            ],
            [
                'title' => 'Employee Training Course',
                'description' => 'Online certification course for team members',
                'amount' => 300.00,
                'category_id' => 8, // Training & Development
                'expense_date' => '2024-02-10',
                'payment_method' => 'credit_card',
                'reference_number' => 'EXP-2024-008',
                'vendor' => 'Coursera Business',
                'notes' => 'Professional development for IT team',
                'status' => 'approved',
            ],
            [
                'title' => 'Office Cleaning Supplies',
                'description' => 'Monthly cleaning supplies for office maintenance',
                'amount' => 75.00,
                'category_id' => 1, // Office Supplies
                'expense_date' => '2024-02-12',
                'payment_method' => 'cash',
                'reference_number' => 'EXP-2024-009',
                'vendor' => 'CleanPro Supplies',
                'notes' => 'Regular office maintenance',
                'status' => 'rejected',
            ],
            [
                'title' => 'Software License Renewal',
                'description' => 'Annual renewal of project management software',
                'amount' => 1200.00,
                'category_id' => 5, // Equipment & Software
                'expense_date' => '2024-02-15',
                'payment_method' => 'bank_transfer',
                'reference_number' => 'EXP-2024-010',
                'vendor' => 'Atlassian',
                'notes' => 'Jira and Confluence license renewal',
                'status' => 'pending',
            ],
        ];

        foreach ($expenses as $expense) {
            Expense::create($expense);
        }
    }
}
