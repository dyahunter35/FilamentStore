<?php

namespace Database\Seeders;

use App\Models\ExpenseCategory;
use Illuminate\Database\Seeder;

class ExpenseCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Office Supplies',
                'description' => 'General office supplies and stationery',
                'code' => 'OFF001',
                'parent_id' => null,
                'budget_limit' => 5000.00,
                'is_active' => true,
                'status' => 'active',
            ],
            [
                'name' => 'Travel & Transportation',
                'description' => 'Business travel and transportation expenses',
                'code' => 'TRA001',
                'parent_id' => null,
                'budget_limit' => 15000.00,
                'is_active' => true,
                'status' => 'active',
            ],
            [
                'name' => 'Marketing & Advertising',
                'description' => 'Marketing campaigns and advertising costs',
                'code' => 'MAR001',
                'parent_id' => null,
                'budget_limit' => 20000.00,
                'is_active' => true,
                'status' => 'active',
            ],
            [
                'name' => 'Utilities',
                'description' => 'Electricity, water, internet, and other utilities',
                'code' => 'UTI001',
                'parent_id' => null,
                'budget_limit' => 8000.00,
                'is_active' => true,
                'status' => 'active',
            ],
            [
                'name' => 'Equipment & Software',
                'description' => 'Computer equipment and software licenses',
                'code' => 'EQU001',
                'parent_id' => null,
                'budget_limit' => 25000.00,
                'is_active' => true,
                'status' => 'active',
            ],
            [
                'name' => 'Professional Services',
                'description' => 'Legal, accounting, and consulting services',
                'code' => 'PRO001',
                'parent_id' => null,
                'budget_limit' => 12000.00,
                'is_active' => true,
                'status' => 'active',
            ],
            [
                'name' => 'Meals & Entertainment',
                'description' => 'Business meals and client entertainment',
                'code' => 'MEA001',
                'parent_id' => null,
                'budget_limit' => 6000.00,
                'is_active' => true,
                'status' => 'active',
            ],
            [
                'name' => 'Training & Development',
                'description' => 'Employee training and professional development',
                'code' => 'TRD001',
                'parent_id' => null,
                'budget_limit' => 10000.00,
                'is_active' => true,
                'status' => 'active',
            ],
        ];

        foreach ($categories as $category) {
            ExpenseCategory::create($category);
        }

        // Create some subcategories
        $subcategories = [
            [
                'name' => 'Stationery',
                'description' => 'Pens, papers, and basic stationery items',
                'code' => 'OFF001-01',
                'parent_id' => 1, // Office Supplies
                'budget_limit' => 1000.00,
                'is_active' => true,
                'status' => 'active',
            ],
            [
                'name' => 'Printing Supplies',
                'description' => 'Ink cartridges, toners, and printing materials',
                'code' => 'OFF001-02',
                'parent_id' => 1, // Office Supplies
                'budget_limit' => 2000.00,
                'is_active' => true,
                'status' => 'active',
            ],
            [
                'name' => 'Flight Tickets',
                'description' => 'Airline tickets for business travel',
                'code' => 'TRA001-01',
                'parent_id' => 2, // Travel & Transportation
                'budget_limit' => 10000.00,
                'is_active' => true,
                'status' => 'active',
            ],
            [
                'name' => 'Hotel Accommodation',
                'description' => 'Hotel stays for business trips',
                'code' => 'TRA001-02',
                'parent_id' => 2, // Travel & Transportation
                'budget_limit' => 5000.00,
                'is_active' => true,
                'status' => 'active',
            ],
        ];

        foreach ($subcategories as $subcategory) {
            ExpenseCategory::create($subcategory);
        }
    }
}
