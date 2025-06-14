<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'cost',
        'quantity',
        'reorder_point',
        'serial_numbers',
        'branch_id',
        'barcode',
    ];

    protected $casts = [
        'serial_numbers' => 'array',
    ];

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    public function isLowStock(): bool
    {
        return $this->quantity <= $this->reorder_point;
    }

    public function getStockStatus(): string
    {
        if ($this->quantity <= 0) {
            return 'out_of_stock';
        }
        if ($this->isLowStock()) {
            return 'low_stock';
        }
        return 'in_stock';
    }
}
