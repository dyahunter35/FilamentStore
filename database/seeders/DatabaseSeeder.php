<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Core Data
            UserSeeder::class,
            CurrencySeeder::class,

            // Business Entities
            CustomerSeeder::class,
            SupplierSeeder::class,
            EmployeeSeeder::class,
            // Products & Categories
            BrandSeeder::class,
            ProductUnitSeeder::class,
            ProductSeeder::class,
            ExpenseCategorySeeder::class,
            // Financial Data
            ExpenseSeeder::class,
            OtherRevenueSeeder::class,

            // Exchange & Currency
            ExchangeClientSeeder::class,
            CurrencyTransferSeeder::class,
            ExchangeClientTransactionSeeder::class,

            // HR & Payroll
            AttendanceSeeder::class,
            EmployeeLoanSeeder::class,
            PayrollSeeder::class,

            // Note: Add these seeders when the corresponding models are created
            // SalesInvoiceSeeder::class,
            // SalesReturnSeeder::class,
            // PurchaseInvoiceSeeder::class,
            // PurchaseReturnSeeder::class,
            // InventoryReconciliationSeeder::class,
            // WarehouseTransferSeeder::class,
        ]);
    }
}
