# Implementation Plan

## Project Setup and Core Configuration
- [x] Step 1: Initialize Laravel Project and Configure Environment
  - **Task**: Set up a new Laravel project, configure the `.env` file for database connection, and ensure basic project structure is in place.
  - **Files**:
    - `composer.json`: Add Laravel dependencies.
    - `.env`: Database configuration.
    - `config/app.php`: Basic application configuration.
  - **Step Dependencies**: None
  - **User Instructions**: Run `composer create-project laravel/laravel electronic-store-accounting` then configure `.env` with your database credentials.

- [x] Step 2: Install and Configure Filament Admin Panel
  - **Task**: Install Filament, publish its assets, and run initial migrations to set up the default Filament user tables.
  - **Files**:
    - `composer.json`: Add Filament dependencies.
    - `config/app.php`: Register Filament service provider.
    - `app/Providers/Filament/AdminPanelProvider.php`: Default panel configuration.
    - `database/migrations/*_create_users_table.php`: Default user migration.
  - **Step Dependencies**: Step 1
  - **User Instructions**: Run `composer require filament/filament:"^3.0"` then `php artisan filament:install --panels`. After that, `php artisan migrate` and `php artisan make:filament-user`.

- [x] Step 3: Implement Filament Tenancy for Branch Management
  - **Task**: Install Filament Tenancy, define the `Branch` (Tenant) model and migration, and configure the user model to be tenant-aware. This will establish the multi-tenancy foundation.
  - **Files**:
    - `composer.json`: Add Filament Tenancy dependency.
    - `app/Models/Branch.php`: Create Branch model.
    - `database/migrations/*_create_branches_table.php`: Create branches table.
    - `app/Models/User.php`: Implement `HasTenants` interface and related methods.
    - `app/Providers/Filament/AdminPanelProvider.php`: Configure tenancy for the admin panel.
  - **Step Dependencies**: Step 2
  - **User Instructions**: Run `composer require filament/spatie-laravel-tenancy-plugin`. Create the `Branch` model and migration: `php artisan make:model Branch -m`. Then, configure `Branch.php` and `User.php` as per Filament Tenancy documentation and update `AdminPanelProvider.php`. Finally, run `php artisan migrate`.

- [x] Step 4: Configure Multi-Language Support (Arabic & English)
  - **Task**: Set up Laravel localization, create language files for Arabic and English, and configure Filament to use the language switcher.
  - **Files**:
    - `config/app.php`: Set default locale and add fallback.
    - `lang/en/app.php`: English translations.
    - `lang/ar/app.php`: Arabic translations.
    - `app/Providers/Filament/AdminPanelProvider.php`: Enable language switcher.
  - **Step Dependencies**: Step 2
  - **User Instructions**: Create `lang/ar` and `lang/en` directories and respective `app.php` files. Update `AdminPanelProvider.php` to enable the language switcher and define available locales.

## Database Schema & Core Resources
- [x] Step 5: Create Product Model and Filament Resource
  - **Task**: Define the `Product` model with fields for name, description, price, cost, quantity, reorder_point, serial_numbers (JSON), and `branch_id`. Generate its migration and a Filament Resource.
  - **Files**:
    - `app/Models/Product.php`: Product model.
    - `database/migrations/*_create_products_table.php`: Products table migration.
    - `app/Filament/Resources/ProductResource.php`: Filament Resource for Products.
  - **Step Dependencies**: Step 3
  - **User Instructions**: Run `php artisan make:filament-resource Product`. Add necessary fields to the migration and the Filament form/table, and manually add tenant awareness.

- [x] Step 6: Implement Barcode Support for Products
  - **Task**: Add a `barcode` field to the `Product` model. Implement logic within the `ProductResource` to allow manual input and display the barcode.
  - **Files**:
    - `database/migrations/*_add_barcode_to_products_table.php`: Add barcode column.
    - `app/Models/Product.php`: Update model.
    - `app/Filament/Resources/ProductResource.php`: Add barcode field to form and table.
  - **Step Dependencies**: Step 5
  - **User Instructions**: Run `php artisan make:migration add_barcode_to_products_table --table=products`. Consider installing a barcode generation package if automated generation is desired (e.g., `composer require milon/barcode`).

- [x] Step 7: Create Customer and Supplier Models and Resources
  - **Task**: Define `Customer` and `Supplier` models (with common fields like name, phone, address, email, `branch_id`). Generate their migrations and Filament Resources.
  - **Files**:
    - `app/Models/Customer.php`: Customer model.
    - `database/migrations/*_create_customers_table.php`: Customers table migration.
    - `app/Filament/Resources/CustomerResource.php`: Filament Resource for Customers.
    - `app/Models/Supplier.php`: Supplier model.
    - `database/migrations/*_create_suppliers_table.php`: Suppliers table migration.
    - `app/Filament/Resources/SupplierResource.php`: Filament Resource for Suppliers.
  - **Step Dependencies**: Step 3
  - **User Instructions**: Run `php artisan make:filament-resource Customer` and `php artisan make:filament-resource Supplier`. Manually add tenant awareness to the models and resources.

- [x] Step 8: Create Currency Model and Exchange Client Model
  - **Task**: Define `Currency` model (name, symbol, code, `branch_id`) and `ExchangeClient` model (name, phone, `branch_id`). Generate their migrations and Filament Resources.
  - **Files**:
    - `app/Models/Currency.php`: Currency model.
    - `database/migrations/*_create_currencies_table.php`: Currencies table migration.
    - `app/Filament/Resources/CurrencyResource.php`: Filament Resource for Currencies.
    - `app/Models/ExchangeClient.php`: ExchangeClient model.
    - `database/migrations/*_create_exchange_clients_table.php`: ExchangeClients table migration.
    - `app/Filament/Resources/ExchangeClientResource.php`: Filament Resource for ExchangeClients.
  - **Step Dependencies**: Step 3
  - **User Instructions**: Run `php artisan make:filament-resource Currency` and `php artisan make:filament-resource ExchangeClient`. Manually add tenant awareness to the models and resources.

## Sales and Purchases Management
- [x] Step 9: Implement Sales Invoice Model and Resource
  - **Task**: Define `SalesInvoice` model (customer_id, date, total_amount, discount, final_amount, status, `branch_id`). Create its migration and Filament Resource. Implement basic form fields.
  - **Files**:
    - `app/Models/SalesInvoice.php`: SalesInvoice model.
    - `database/migrations/*_create_sales_invoices_table.php`: Sales invoices table migration.
    - `app/Filament/Resources/SalesInvoiceResource.php`: Filament Resource for Sales Invoices.
  - **Step Dependencies**: Step 7
  - **User Instructions**: Run `php artisan make:filament-resource SalesInvoice`. Manually add tenant awareness.

- [x] Step 10: Implement Invoice Items and Product Selection
  - **Task**: Create `SalesInvoiceItem` model (sales_invoice_id, product_id, quantity, unit_price, subtotal). Add a Filament Repeater field to `SalesInvoiceResource` to allow adding multiple products to an invoice, linking to the `Product` model.
  - **Files**:
    - `app/Models/SalesInvoiceItem.php`: SalesInvoiceItem model.
    - `database/migrations/*_create_sales_invoice_items_table.php`: Sales invoice items migration.
    - `app/Filament/Resources/SalesInvoiceResource.php`: Modify form to include Repeater for items.
  - **Step Dependencies**: Step 9, Step 5
  - **User Instructions**: Run `php artisan make:model SalesInvoiceItem -m`. Update migration. Modify `SalesInvoiceResource` form with Filament's `Repeater` field.

- [x] Step 11: Implement Purchase Invoice Model and Resource
  - **Task**: Define `PurchaseInvoice` model (supplier_id, date, total_amount, discount, final_amount, status, `branch_id`). Create its migration and Filament Resource. Implement basic form fields and invoice items similar to sales invoices.
  - **Files**:
    - `app/Models/PurchaseInvoice.php`: PurchaseInvoice model.
    - `database/migrations/*_create_purchase_invoices_table.php`: Purchase invoices table migration.
    - `app/Filament/Resources/PurchaseInvoiceResource.php`: Filament Resource for Purchase Invoices.
    - `app/Models/PurchaseInvoiceItem.php`: PurchaseInvoiceItem model.
    - `database/migrations/*_create_purchase_invoice_items_table.php`: Purchase invoice items migration.
  - **Step Dependencies**: Step 7, Step 5
  - **User Instructions**: Run `php artisan make:filament-resource PurchaseInvoice`. Create `PurchaseInvoiceItem` model and migration. Manually add tenant awareness.

- [x] Step 12: Implement Sales and Purchase Returns
  - **Task**: Create `SalesReturn` and `PurchaseReturn` models and migrations. Implement Filament Resources to record returns, linking to original invoices and updating inventory.
  - **Files**:
    - `app/Models/SalesReturn.php`: SalesReturn model.
    - `database/migrations/*_create_sales_returns_table.php`: Sales returns migration.
    - `app/Filament/Resources/SalesReturnResource.php`: Filament Resource.
    - `app/Models/PurchaseReturn.php`: PurchaseReturn model.
    - `database/migrations/*_create_purchase_returns_table.php`: Purchase returns migration.
    - `app/Filament/Resources/PurchaseReturnResource.php`: Filament Resource.
  - **Step Dependencies**: Step 9, Step 11
  - **User Instructions**: Run `php artisan make:filament-resource SalesReturn` and `php artisan make:filament-resource PurchaseReturn`. Manually add tenant awareness.

- [x] Step 13: Implement Inventory Movement Logic
  - **Task**: Create observers to automatically update product quantities based on sales, purchases, and returns.
  - **Files**:
    - `app/Observers/SalesInvoiceItemObserver.php`: Handle sales inventory changes
    - `app/Observers/PurchaseInvoiceItemObserver.php`: Handle purchase inventory changes
    - `app/Observers/SalesReturnObserver.php`: Handle sales return inventory changes
    - `app/Observers/PurchaseReturnObserver.php`: Handle purchase return inventory changes
    - `app/Providers/AppServiceProvider.php`: Register observers
  - **Step Dependencies**: Step 9, Step 11, Step 12
  - **User Instructions**: Run `php artisan make:observer` commands for each observer. Implement inventory movement logic in each observer and register them in AppServiceProvider.

## Inventory Management
- [x] Step 14: Implement Inter-Warehouse Transfers
  - **Task**: Create `WarehouseTransfer` model (from_branch_id, to_branch_id, product_id, quantity, date, status) and its Filament Resource. Include basic transfer workflow states.
  - **Files**:
    - `app/Models/WarehouseTransfer.php`: WarehouseTransfer model.
    - `database/migrations/*_create_warehouse_transfers_table.php`: Transfers table.
    - `app/Filament/Resources/WarehouseTransferResource.php`: Resource.
  - **Step Dependencies**: Step 3, Step 5
  - **User Instructions**: Run `php artisan make:filament-resource WarehouseTransfer --tenant`.

- [x] Step 15: Implement Inventory Reconciliation (Jard)
  - **Task**: Create models, migration, and Filament Resource for Inventory Reconciliation (Jard). Allow users to record physical counts, compare with system quantities, and adjust inventory accordingly. Implement logic to update product quantities after reconciliation is created or updated.
  - **Files**:
    - `app/Models/InventoryReconciliation.php`: InventoryReconciliation model.
    - `app/Models/InventoryReconciliationItem.php`: InventoryReconciliationItem model.
    - `database/migrations/*_create_inventory_reconciliations_table.php`: Migration.
    - `database/migrations/*_create_inventory_reconciliation_items_table.php`: Migration.
    - `app/Filament/Resources/InventoryReconciliationResource.php`: Filament Resource.
  - **Step Dependencies**: Step 14
  - **User Instructions**: Use the Filament admin panel to perform inventory reconciliations. Product quantities will be updated automatically.

- [x] Step 16: Implement Reorder Points and Low Stock Alerts
  - **Task**: Create a Filament scheduled command or custom page to check product quantities against `reorder_point`. Generate Filament notifications for low stock items.
  - **Files**:
    - `app/Filament/Widgets/LowStockProducts.php`: A Filament widget to display low stock.
    - `app/Console/Commands/CheckLowStock.php`: Artisan command.
    - `app/Notifications/LowStockNotification.php`: Filament notification.
    - `app/Providers/Filament/AdminPanelProvider.php`: Register widget.
  - **Step Dependencies**: Step 5, Step 32
  - **User Instructions**: Run `php artisan make:filament-widget LowStockProducts --resource=ProductResource --table` and `php artisan make:notification LowStockNotification`. Add the command to `app/Console/Kernel.php` for scheduling.

## Expense and Revenue Tracking
- [x] Step 17: Create Expense Category and Expense Models
  - **Task**: Define `ExpenseCategory` (name, `branch_id`) and `Expense` (category_id, amount, date, description, `branch_id`) models. Generate migrations and Filament Resources. Include fields for daily branch and shipping expenses.
  - **Files**:
    - `app/Models/ExpenseCategory.php`: ExpenseCategory model.
    - `database/migrations/*_create_expense_categories_table.php`: Expense categories table.
    - `app/Filament/Resources/ExpenseCategoryResource.php`: Resource.
    - `app/Models/Expense.php`: Expense model.
    - `database/migrations/*_create_expenses_table.php`: Expenses table.
    - `app/Filament/Resources/ExpenseResource.php`: Resource.
  - **Step Dependencies**: Step 3
  - **User Instructions**: Run `php artisan make:filament-resource ExpenseCategory --tenant` and `php artisan make:filament-resource Expense --tenant`.

- [x] Step 18: Create Other Revenue Model and Resource
  - **Task**: Define `OtherRevenue` model (amount, date, description, `branch_id`). Generate its migration and Filament Resource.
  - **Files**:
    - `app/Models/OtherRevenue.php`: OtherRevenue model.
    - `database/migrations/*_create_other_revenues_table.php`: Other revenues table.
    - `app/Filament/Resources/OtherRevenueResource.php`: Filament Resource.
  - **Step Dependencies**: Step 3
  - **User Instructions**: Run `php artisan make:filament-resource OtherRevenue`.

## Human Resources & Payroll
- [x] Step 19: Create Employee Model and Resource
  - **Task**: Define `Employee` model (name, position, salary, contact_info, `branch_id`). Generate its migration and Filament Resource.
  - **Files**:
    - `app/Models/Employee.php`: Employee model.
    - `database/migrations/*_create_employees_table.php`: Employees table.
    - `app/Filament/Resources/EmployeeResource.php`: Filament Resource.
  - **Step Dependencies**: Step 3
  - **User Instructions**: Run `php artisan make:filament-resource Employee`.

- [x] Step 20: Implement Employee Attendance System
  - **Task**: Create `Attendance` model (employee_id, date, clock_in_time, clock_out_time, `branch_id`). Implement Filament Resource for manual attendance entry and basic reporting.
  - **Files**:
    - `app/Models/Attendance.php`: Attendance model.
    - `database/migrations/*_create_attendances_table.php`: Attendances table.
    - `app/Filament/Resources/AttendanceResource.php`: Filament Resource.
  - **Step Dependencies**: Step 19
  - **User Instructions**: Run `php artisan make:filament-resource Attendance`.

- [x] Step 21: Implement Employee Loans Management
  - **Task**: Create `EmployeeLoan` model (employee_id, amount, deduction_amount_per_month, remaining_amount, date_granted, `branch_id`). Implement Filament Resource for managing loans.
  - **Files**:
    - `app/Models/EmployeeLoan.php`: EmployeeLoan model.
    - `database/migrations/*_create_employee_loans_table.php`: Employee loans table.
    - `app/Filament/Resources/EmployeeLoanResource.php`: Filament Resource.
  - **Step Dependencies**: Step 19
  - **User Instructions**: Run `php artisan make:filament-resource EmployeeLoan`.

- [x] Step 22: Develop Payroll Calculation Logic (Base Salary, Deductions, Bonuses)
  - **Task**: Implement a mechanism (e.g., an Artisan command or a dedicated page) to calculate monthly salaries based on fixed salaries, attendance, deductions (including loan deductions), and bonuses.
  - **Files**:
    - `app/Models/Payroll.php`: Simple model to log generated payrolls (month, year, total_amount, `branch_id`).
    - `database/migrations/*_create_payrolls_table.php`: Payrolls table.
    - `app/Filament/Resources/PayrollResource.php`: Resource for viewing generated payrolls.
    - `app/Filament/Pages/GeneratePayroll.php`: Custom Filament page for initiating payroll calculation.
    - `app/Http/Livewire/PayrollCalculator.php`: Livewire component for the calculation logic.
  - **Step Dependencies**: Step 19, Step 20, Step 21
  - **User Instructions**: Run `php artisan make:livewire PayrollCalculator` and `php artisan make:filament-page GeneratePayroll`.

- [x] Step 23: Implement Multi-Currency Exchange Rate Management
  - **Task**: Add fields to the `Currency` model for `buy_rate` and `sell_rate`. Modify `CurrencyResource` to allow manual entry of these rates.
  - **Files**:
    - `database/migrations/*_add_exchange_rates_to_currencies_table.php`: Add columns to currencies table.
    - `app/Models/Currency.php`: Update model.
    - `app/Filament/Resources/CurrencyResource.php`: Add buy/sell rate fields.
  - **Step Dependencies**: Step 8
  - **User Instructions**: Run `php artisan make:migration add_exchange_rates_to_currencies_table --table=currencies`.

- [x] Step 24: Implement Multi-Currency Transfer Log
  - **Task**: Create `CurrencyTransfer` model (from_currency_id, to_currency_id, amount, converted_amount, exchange_rate_used, date, description, `branch_id`). Implement Filament Resource to log these transfers.
  - **Files**:
    - `app/Models/CurrencyTransfer.php`: CurrencyTransfer model.
    - `database/migrations/*_create_currency_transfers_table.php`: Currency transfers table.
    - `app/Filament/Resources/CurrencyTransferResource.php`: Filament Resource.
  - **Step Dependencies**: Step 8
  - **User Instructions**: Run `php artisan make:filament-resource CurrencyTransfer`.

- [x] Step 25: Implement Hard Currency Exchange Client Operations
  - **Task**: Create `ExchangeClientTransaction` model (exchange_client_id, currency_id, amount, type (buy/sell), date, `branch_id`). Implement Filament Resource for recording these transactions.
  - **Files**:
    - `app/Models/ExchangeClientTransaction.php`: Model.
    - `database/migrations/*_create_exchange_client_transactions_table.php`: Migration.
    - `app/Filament/Resources/ExchangeClientTransactionResource.php`: Resource.
  - **Step Dependencies**: Step 8, Step 23
  - **User Instructions**: Run `php artisan make:filament-resource ExchangeClientTransaction`.

- [x] Step 26: Design and Implement POS Interface
  - **Task**: Create a custom Filament Page or a Livewire component for the Point of Sale interface. This interface should allow quick product selection (via barcode scan or search), quantity adjustment, customer selection (permanent or one-time), and payment processing.
  - **Files**:
    - `app/Filament/Pages/Pos.php`: Custom Filament Page for POS.
    - `resources/views/filament/pages/pos.blade.php`: Blade view for the POS.
    - `app/Http/Livewire/PosComponent.php`: Livewire component to handle POS logic.
  - **Step Dependencies**: Step 5, Step 7, Step 10
  - **User Instructions**: Run `php artisan make:filament-page Pos` and `php artisan make:livewire PosComponent`. Design the UI using Filament forms/tables/buttons.

- [x] Step 27: Integrate POS with Sales & Inventory
  - **Task**: Implement the backend logic for the POS. When a sale is completed, create a `SalesInvoice`, populate `SalesInvoiceItem`s, and decrement `Product` quantities, handling serial numbers.
  - **Files**:
    - `app/Http/Livewire/PosComponent.php`: Add logic for completing sales, creating invoices, and updating inventory.
    - `app/Models/SalesInvoice.php`: Potentially add a method for POS creation.
  - **Step Dependencies**: Step 10, Step 13, Step 26

- [x] Step 28: Develop Profit and Loss Statement Report
  - **Task**: Create a custom Filament Report or a Filament Widget to display Profit and Loss (P&L) based on sales, returns, expenses, and other revenues. Allow filtering by date range and branch.
  - **Files**:
    - `app/Filament/Widgets/ProfitLossChart.php`: Filament widget for P&L overview.
    - `app/Filament/Pages/ProfitLossReport.php`: Custom Filament Page for detailed P&L.
    - `app/Reports/ProfitLoss.php`: (Optional) A dedicated class for P&L calculations.
  - **Step Dependencies**: Step 9, Step 11, Step 12, Step 17, Step 18
  - **User Instructions**: Run `php artisan make:filament-widget ProfitLossChart` and `php artisan make:filament-page ProfitLossReport`.

- [x] Step 29: Implement Account Statement Reports for Customers and Suppliers
  - **Task**: Create custom Filament Pages or Livewire components to generate detailed account statements for selected customers and suppliers, showing invoices, payments, and returns.
  - **Files**:
    - `app/Filament/Resources/CustomerResource/Pages/CustomerAccountStatement.php`: Page for customer statements.
    - `app/Filament/Pages/SupplierAccountStatement.php`: Page for supplier statements.
    - `app/Http/Livewire/AccountStatementViewer.php`: Livewire component for rendering statements.
    - `resources/views/filament/resources/customer-resource/pages/account-statement.blade.php`: View for customer statement page.
    - `resources/views/filament/pages/supplier-account-statement.blade.php`: View for supplier statement page.
  - **Step Dependencies**: Step 7, Step 9, Step 11, Step 12
  - **User Instructions**: Run `php artisan make:filament-page CustomerAccountStatement` and `php artisan make:filament-page SupplierAccountStatement`. Create `php artisan make:livewire AccountStatementViewer`.

- [x] Step 30: Develop Inventory Reports
  - **Task**: Create Filament Reports or Widgets to show inventory value, stock levels, and movement history.
  - **Files**:
    - `app/Filament/Pages/InventoryReport.php`: Page for detailed inventory reports.
    - `app/Filament/Widgets/InventoryOverview.php`: Widget for quick inventory stats.
  - **Step Dependencies**: Step 5, Step 13, Step 14
  - **User Instructions**: Run `php artisan make:filament-page InventoryReport` and `php artisan make:filament-widget InventoryOverview`.

- [x] Step 31: Create Sales and Purchase Reports
  - **Task**: Develop Filament Reports or Widgets to analyze sales and purchase trends, best-selling products, and top customers/suppliers.
  - **Files**:
    - `app/Filament/Pages/SalesReport.php`: Page for sales reports.
    - `app/Filament/Pages/PurchaseReport.php`: Page for purchase reports.
    - `app/Filament/Widgets/SalesOverview.php`: Widget for sales insights.
  - **Step Dependencies**: Step 9, Step 11
  - **User Instructions**: Run `php artisan make:filament-page SalesReport` and `php artisan make:filament-page PurchaseReport`.

## General Enhancements
- [x] Step 32: Implement Comprehensive Notification System (Filament Native)
  - **Task**: Ensure all relevant events (low stock, loan deduction applied, invoice due) trigger Filament notifications.
  - **Files**:
    - `app/Providers/Filament/AdminPanelProvider.php`: Ensure notification features are enabled.
    - `app/Notifications/*`: Various notification classes created in earlier steps.
    - Existing models/observers/actions: Add `->notify()` calls where appropriate.
  - **Step Dependencies**: Step 16, Step 22, and other relevant features.

- [x] Step 33: Create a Comprehensive Dashboard
  - **Task**: Design a central Filament Dashboard that provides an overview of key financial metrics, inventory status, recent sales, and notifications.
  - **Files**:
    - `app/Filament/Widgets/StatsOverview.php`: Created with key metrics like total products, customers, and suppliers
    - `app/Filament/Widgets/RecentSales.php`: Added table widget for latest transactions
    - `app/Filament/Widgets/DashboardNotifications.php`: Implemented notification display widget
    - Existing chart widgets organized for better overview
  - **Step Dependencies**: All reporting and data entry steps.

- [x] Step 34: Implement Role-Based Access Control (RBAC) using Filament Shield or similar
  - **Task**: Set up roles (e.g., Admin, Accountant, Sales, Warehouse) and assign permissions to control access to different Filament Resources and actions.
  - **Files**:
    - `composer.json`: Add Spatie Permissions or similar.
    - `config/auth.php`: Configure permissions guard.
    - `app/Models/User.php`: Implement `HasRoles` trait.
    - `app/Filament/Resources/*`: Apply `canAccess()` methods or similar permission checks.
  - **Step Dependencies**: Step 2
  - **User Instructions**: Run `composer require spatie/laravel-permission` and follow the setup for Filament Shield if desired (`composer require bex/filament-shield`). This is critical for security and data integrity.
