<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, Notifiable;
    use \Spatie\MediaLibrary\InteractsWithMedia;

    protected $fillable = [
        'name',
        'description',
        'price',
        'cost',
        'quantity',
        'reorder_point',
        'serial_numbers',
        'branch_id',
        'category_id',
        'brand_id',
        'barcode',
    ];

    protected $casts = [
        'serial_numbers' => 'array',
    ];

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    public function unit(): BelongsTo
    {
        return $this->belongsTo(ProductUnit::class);
    }


    public function isLowStock(): bool
    {
        return $this->quantity <= $this->reorder_point;
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
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
