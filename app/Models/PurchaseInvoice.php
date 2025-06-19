<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PurchaseInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'date',
        'total_amount',
        'discount',
        'final_amount',
        'status',
        'branch_id',
        'burcher_number',
    ];

    protected $casts = [
        'date' => 'date',
        'total_amount' => 'decimal:2',
        'discount' => 'decimal:2',
        'final_amount' => 'decimal:2',
    ];

    protected static function booted()
    {
        static::creating(function ($burcher) {
            $burcher->burcher_number = self::generateBurcherNumber();
        });
    }
    public static function generateBurcherNumber(): string
    {
        return (new self())->generateUniqueNumber('BUR-', 'burcher_number');
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(PurchaseburcherItem::class);
    }
}
