<?php

namespace App\Observers;

use App\Models\SalesInvoiceItem;
use App\Models\User;
use App\Models\Product;
use App\Notifications\LowStockNotification;

class SalesInvoiceItemObserver
{
    /**
     * Handle the SalesInvoiceItem "creating" event.
     */
    public function creating(SalesInvoiceItem $salesInvoiceItem): void
    {
        if (!$salesInvoiceItem->unit_price) {
            $product = Product::find($salesInvoiceItem->product_id);
            if ($product) {
                $salesInvoiceItem->unit_price = $product->price;
                $salesInvoiceItem->subtotal = $salesInvoiceItem->quantity * $product->price;
            }
        }
    }

    /**
     * Handle the SalesInvoiceItem "created" event.
     */
    public function created(SalesInvoiceItem $salesInvoiceItem): void
    {
        // Decrease product quantity when a sales invoice item is created
        $product = $salesInvoiceItem->product;
        $product->quantity -= $salesInvoiceItem->quantity;
        $product->save();

        // Notify admins if product is low on stock
        if ($product->isLowStock()) {
            User::query()
                ->where('is_admin', true)
                ->each(fn (User $user) => 
                    $user->notify(new LowStockNotification($product))
                );
        }

        // Update invoice totals
        $this->updateInvoiceTotals($salesInvoiceItem);
    }

    /**
     * Handle the SalesInvoiceItem "updating" event.
     */
    public function updating(SalesInvoiceItem $salesInvoiceItem): void
    {
        // Recalculate subtotal if quantity or unit_price changes
        if ($salesInvoiceItem->isDirty(['quantity', 'unit_price'])) {
            $salesInvoiceItem->subtotal = $salesInvoiceItem->quantity * $salesInvoiceItem->unit_price;
        }
    }

    /**
     * Handle the SalesInvoiceItem "updated" event.
     */
    public function updated(SalesInvoiceItem $salesInvoiceItem): void
    {
        // If quantity was changed, adjust product quantity accordingly
        if ($salesInvoiceItem->isDirty('quantity')) {
            $product = $salesInvoiceItem->product;
            $originalQuantity = $salesInvoiceItem->getOriginal('quantity');
            $newQuantity = $salesInvoiceItem->quantity;
            $difference = $originalQuantity - $newQuantity;

            // Add the difference to product quantity
            $product->quantity += $difference;
            $product->save();

            // Notify admins if product is low on stock
            if ($product->isLowStock()) {
                User::query()
                    ->where('is_admin', true)
                    ->each(fn (User $user) => 
                        $user->notify(new LowStockNotification($product))
                    );
            }
        }

        // Update invoice totals
        $this->updateInvoiceTotals($salesInvoiceItem);
    }

    /**
     * Handle the SalesInvoiceItem "deleted" event.
     */
    public function deleted(SalesInvoiceItem $salesInvoiceItem): void
    {
        // Return quantity to product when a sales invoice item is deleted
        $product = $salesInvoiceItem->product;
        $product->quantity += $salesInvoiceItem->quantity;
        $product->save();

        // Update invoice totals
        $this->updateInvoiceTotals($salesInvoiceItem);
    }

    /**
     * Update the totals of the associated invoice.
     */
    protected function updateInvoiceTotals(SalesInvoiceItem $salesInvoiceItem): void
    {
        if ($salesInvoiceItem->salesInvoice) {
            $totalAmount = $salesInvoiceItem->salesInvoice->items()->sum('subtotal');
            $discount = $salesInvoiceItem->salesInvoice->discount ?? 0;
            $finalAmount = $totalAmount - $discount;
            
            $salesInvoiceItem->salesInvoice->update([
                'total_amount' => $totalAmount,
                'final_amount' => $finalAmount
            ]);
        }
    }

    /**
     * Handle the SalesInvoiceItem "restored" event.
     */
    public function restored(SalesInvoiceItem $salesInvoiceItem): void
    {
        //
    }

    /**
     * Handle the SalesInvoiceItem "force deleted" event.
     */
    public function forceDeleted(SalesInvoiceItem $salesInvoiceItem): void
    {
        //
    }
}
