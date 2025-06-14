<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Filament\Models\Tenant;
use Filament\Models\Concerns\BelongsToTenant;

class Branch extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'location',
        // Add other branch specific fields here later
    ];

    public static function getTenantModel(): string
    {
        return static::class;
    }

    public function getTenantIdentifierName(): string
    {
        return 'id'; // Or the column name you use for the tenant identifier
    }

    public function getTenantOwnershipRelationshipName(): string
    {
        return 'branch'; // The name of the relationship on the User model
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'branch_user', 'branch_id', 'user_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function currencies()
    {
        return $this->hasMany(Currency::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function exchangeClients()
    {
        return $this->hasMany(ExchangeClient::class);
    }

    public function expenseCategories()
    {
        return $this->hasMany(ExpenseCategory::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function employeeLoans()
    {
        return $this->hasMany(EmployeeLoan::class);
    }

    public function payrolls()
    {
        return $this->hasMany(Payroll::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function purchaseInvoices()
    {
        return $this->hasMany(PurchaseInvoice::class);
    }

    public function purchaseReturns()
    {
        return $this->hasMany(PurchaseReturn::class);
    }

    public function salesInvoices()
    {
        return $this->hasMany(SalesInvoice::class);
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function inventoryReconciliations()
    {
        return $this->hasMany(InventoryReconciliation::class);
    }

    public function currencyTransfers()
    {
        return $this->hasMany(CurrencyTransfer::class);
    }
}
