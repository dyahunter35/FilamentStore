<?php

namespace App\Observers;

use App\Models\SalesInvoiceItem;
use App\Models\User;
use App\Notifications\LowStockNotification;

class SalesInvoiceItemObserver
{
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
