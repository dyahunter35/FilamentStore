<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SalesInvoice extends Model
{
    use HasFactory;
    use \App\Traits\GenerateId;
    protected $fillable = [
        'customer_id',
        'date',
        'total_amount',
        'discount',
        'final_amount',
        'status',
        'branch_id',
        'invoice_number',
    ];

    protected $casts = [
        'date' => 'date',
        'total_amount' => 'decimal:2',
        'discount' => 'decimal:2',
        'final_amount' => 'decimal:2',
    ];

    protected static function booted()
    {
        static::creating(function ($salesInvoice) {
            $salesInvoice->invoice_number = self::generateInvoiceNumber();
        });
    }
    public static function generateInvoiceNumber(): string
    {
        return (new self())->generateUniqueNumber('INV-', 'invoice_number');
    }


    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function items()
    {
        return $this->hasMany(SalesInvoiceItem::class);
    }
}
