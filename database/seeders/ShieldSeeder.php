<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use BezhanSalleh\FilamentShield\Support\Utils;
use Spatie\Permission\PermissionRegistrar;

class ShieldSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = '[{"name":"super_admin","guard_name":"web","permissions":["view_attendance","view_any_attendance","create_attendance","update_attendance","restore_attendance","restore_any_attendance","replicate_attendance","reorder_attendance","delete_attendance","delete_any_attendance","force_delete_attendance","force_delete_any_attendance","view_branch","view_any_branch","create_branch","update_branch","restore_branch","restore_any_branch","replicate_branch","reorder_branch","delete_branch","delete_any_branch","force_delete_branch","force_delete_any_branch","view_brand","view_any_brand","create_brand","update_brand","restore_brand","restore_any_brand","replicate_brand","reorder_brand","delete_brand","delete_any_brand","force_delete_brand","force_delete_any_brand","view_currency","view_any_currency","create_currency","update_currency","restore_currency","restore_any_currency","replicate_currency","reorder_currency","delete_currency","delete_any_currency","force_delete_currency","force_delete_any_currency","view_currency::transfer","view_any_currency::transfer","create_currency::transfer","update_currency::transfer","restore_currency::transfer","restore_any_currency::transfer","replicate_currency::transfer","reorder_currency::transfer","delete_currency::transfer","delete_any_currency::transfer","force_delete_currency::transfer","force_delete_any_currency::transfer","view_customer","view_any_customer","create_customer","update_customer","restore_customer","restore_any_customer","replicate_customer","reorder_customer","delete_customer","delete_any_customer","force_delete_customer","force_delete_any_customer","view_employee","view_any_employee","create_employee","update_employee","restore_employee","restore_any_employee","replicate_employee","reorder_employee","delete_employee","delete_any_employee","force_delete_employee","force_delete_any_employee","view_employee::loan","view_any_employee::loan","create_employee::loan","update_employee::loan","restore_employee::loan","restore_any_employee::loan","replicate_employee::loan","reorder_employee::loan","delete_employee::loan","delete_any_employee::loan","force_delete_employee::loan","force_delete_any_employee::loan","view_exchange::client","view_any_exchange::client","create_exchange::client","update_exchange::client","restore_exchange::client","restore_any_exchange::client","replicate_exchange::client","reorder_exchange::client","delete_exchange::client","delete_any_exchange::client","force_delete_exchange::client","force_delete_any_exchange::client","view_exchange::client::transaction","view_any_exchange::client::transaction","create_exchange::client::transaction","update_exchange::client::transaction","restore_exchange::client::transaction","restore_any_exchange::client::transaction","replicate_exchange::client::transaction","reorder_exchange::client::transaction","delete_exchange::client::transaction","delete_any_exchange::client::transaction","force_delete_exchange::client::transaction","force_delete_any_exchange::client::transaction","view_expense","view_any_expense","create_expense","update_expense","restore_expense","restore_any_expense","replicate_expense","reorder_expense","delete_expense","delete_any_expense","force_delete_expense","force_delete_any_expense","view_expense::category","view_any_expense::category","create_expense::category","update_expense::category","restore_expense::category","restore_any_expense::category","replicate_expense::category","reorder_expense::category","delete_expense::category","delete_any_expense::category","force_delete_expense::category","force_delete_any_expense::category","view_inventory::reconciliation","view_any_inventory::reconciliation","create_inventory::reconciliation","update_inventory::reconciliation","restore_inventory::reconciliation","restore_any_inventory::reconciliation","replicate_inventory::reconciliation","reorder_inventory::reconciliation","delete_inventory::reconciliation","delete_any_inventory::reconciliation","force_delete_inventory::reconciliation","force_delete_any_inventory::reconciliation","view_other::revenue","view_any_other::revenue","create_other::revenue","update_other::revenue","restore_other::revenue","restore_any_other::revenue","replicate_other::revenue","reorder_other::revenue","delete_other::revenue","delete_any_other::revenue","force_delete_other::revenue","force_delete_any_other::revenue","view_payroll","view_any_payroll","create_payroll","update_payroll","restore_payroll","restore_any_payroll","replicate_payroll","reorder_payroll","delete_payroll","delete_any_payroll","force_delete_payroll","force_delete_any_payroll","view_product","view_any_product","create_product","update_product","restore_product","restore_any_product","replicate_product","reorder_product","delete_product","delete_any_product","force_delete_product","force_delete_any_product","view_product::category","view_any_product::category","create_product::category","update_product::category","restore_product::category","restore_any_product::category","replicate_product::category","reorder_product::category","delete_product::category","delete_any_product::category","force_delete_product::category","force_delete_any_product::category","view_product::unit","view_any_product::unit","create_product::unit","update_product::unit","restore_product::unit","restore_any_product::unit","replicate_product::unit","reorder_product::unit","delete_product::unit","delete_any_product::unit","force_delete_product::unit","force_delete_any_product::unit","view_purchase::invoice","view_any_purchase::invoice","create_purchase::invoice","update_purchase::invoice","restore_purchase::invoice","restore_any_purchase::invoice","replicate_purchase::invoice","reorder_purchase::invoice","delete_purchase::invoice","delete_any_purchase::invoice","force_delete_purchase::invoice","force_delete_any_purchase::invoice","view_purchase::return","view_any_purchase::return","create_purchase::return","update_purchase::return","restore_purchase::return","restore_any_purchase::return","replicate_purchase::return","reorder_purchase::return","delete_purchase::return","delete_any_purchase::return","force_delete_purchase::return","force_delete_any_purchase::return","view_role","view_any_role","create_role","update_role","delete_role","delete_any_role","view_sales::invoice","view_any_sales::invoice","create_sales::invoice","update_sales::invoice","restore_sales::invoice","restore_any_sales::invoice","replicate_sales::invoice","reorder_sales::invoice","delete_sales::invoice","delete_any_sales::invoice","force_delete_sales::invoice","force_delete_any_sales::invoice","view_sales::return","view_any_sales::return","create_sales::return","update_sales::return","restore_sales::return","restore_any_sales::return","replicate_sales::return","reorder_sales::return","delete_sales::return","delete_any_sales::return","force_delete_sales::return","force_delete_any_sales::return","view_supplier","view_any_supplier","create_supplier","update_supplier","restore_supplier","restore_any_supplier","replicate_supplier","reorder_supplier","delete_supplier","delete_any_supplier","force_delete_supplier","force_delete_any_supplier","view_user","view_any_user","create_user","update_user","restore_user","restore_any_user","replicate_user","reorder_user","delete_user","delete_any_user","force_delete_user","force_delete_any_user","view_warehouse::transfer","view_any_warehouse::transfer","create_warehouse::transfer","update_warehouse::transfer","restore_warehouse::transfer","restore_any_warehouse::transfer","replicate_warehouse::transfer","reorder_warehouse::transfer","delete_warehouse::transfer","delete_any_warehouse::transfer","force_delete_warehouse::transfer","force_delete_any_warehouse::transfer","page_AttendanceReport","page_GeneralSettings","page_InventoryReport","page_Pos","page_PurchaseReport","page_SalesReport","widget_DateRangeFilterWidget","widget_ExpensesChart","widget_InventoryOverview","widget_InventoryValueChart","widget_ProfitLossChart","widget_PurchaseOverview","widget_PurchasesChart","widget_SalesChart","widget_SalesOverview","widget_StatsOverview","widget_DashboardNotifications","widget_RecentSales"]},{"name":"user","guard_name":"web","permissions":[]}]';
        $directPermissions = '[]';

        static::makeRolesWithPermissions($rolesWithPermissions);
        static::makeDirectPermissions($directPermissions);

        $this->command->info('Shield Seeding Completed.');
    }

    protected static function makeRolesWithPermissions(string $rolesWithPermissions): void
    {
        if (! blank($rolePlusPermissions = json_decode($rolesWithPermissions, true))) {
            /** @var Model $roleModel */
            $roleModel = Utils::getRoleModel();
            /** @var Model $permissionModel */
            $permissionModel = Utils::getPermissionModel();

            foreach ($rolePlusPermissions as $rolePlusPermission) {
                $role = $roleModel::firstOrCreate([
                    'name' => $rolePlusPermission['name'],
                    'guard_name' => $rolePlusPermission['guard_name'],
                ]);

                if (! blank($rolePlusPermission['permissions'])) {
                    $permissionModels = collect($rolePlusPermission['permissions'])
                        ->map(fn ($permission) => $permissionModel::firstOrCreate([
                            'name' => $permission,
                            'guard_name' => $rolePlusPermission['guard_name'],
                        ]))
                        ->all();

                    $role->syncPermissions($permissionModels);
                }
            }
        }
    }

    public static function makeDirectPermissions(string $directPermissions): void
    {
        if (! blank($permissions = json_decode($directPermissions, true))) {
            /** @var Model $permissionModel */
            $permissionModel = Utils::getPermissionModel();

            foreach ($permissions as $permission) {
                if ($permissionModel::whereName($permission)->doesntExist()) {
                    $permissionModel::create([
                        'name' => $permission['name'],
                        'guard_name' => $permission['guard_name'],
                    ]);
                }
            }
        }
    }
}
