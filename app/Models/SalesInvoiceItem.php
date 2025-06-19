<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product;

class SalesInvoiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'sales_invoice_id',
        'product_id',
        'quantity',
        'unit_price',
        'subtotal',
    ];

    protected $casts = [
        'quantity' => 'integer',
        'unit_price' => 'decimal:2',
        'subtotal' => 'decimal:2',
    ];

    protected static function booted()
    {
        static::creating(function ($item) {
            if (!$item->unit_price) {
                $product = Product::find($item->product_id);
                $item->unit_price = $product ? $product->price : 0;
            }
            $item->subtotal = $item->quantity * $item->unit_price;
        });

        static::updating(function ($item) {
            if ($item->isDirty('quantity') || $item->isDirty('unit_price')) {
                $item->subtotal = $item->quantity * $item->unit_price;
            }
        });

        static::updated(function ($item) {
            // Update parent invoice totals
            if ($item->salesInvoice) {
                $totalAmount = $item->salesInvoice->items()->sum('subtotal');
                $discount = $item->salesInvoice->discount ?? 0;
                $finalAmount = $totalAmount - $discount;

                $item->salesInvoice->update([
                    'total_amount' => $totalAmount,
                    'final_amount' => $finalAmount
                ]);
            }
        });
    }

    public function salesInvoice(): BelongsTo
    {
        return $this->belongsTo(SalesInvoice::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
