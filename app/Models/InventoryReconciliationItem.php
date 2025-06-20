<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InventoryReconciliationItem extends Model
{
    protected $fillable = [
        'inv_rec_id',
        'product_id',
        'system_quantity',
        'actual_quantity',
        'difference',
        'notes',
    ];

    public function inventoryReconciliation(): BelongsTo
    {
        return $this->belongsTo(InventoryReconciliation::class,'inv_rec_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
