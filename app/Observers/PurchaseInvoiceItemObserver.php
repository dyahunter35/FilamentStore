<?php

namespace App\Observers;

use App\Models\PurchaseInvoiceItem;
use App\Models\User;
use App\Notifications\LowStockNotification;

class PurchaseInvoiceItemObserver
{
    /**
     * Handle the PurchaseInvoiceItem "created" event.
     */
    public function created(PurchaseInvoiceItem $purchaseInvoiceItem): void
    {
        // Increase product quantity when a purchase invoice item is created
        $product = $purchaseInvoiceItem->product;
        $product->quantity += $purchaseInvoiceItem->quantity;
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
     * Handle the PurchaseInvoiceItem "updated" event.
     */
    public function updated(PurchaseInvoiceItem $purchaseInvoiceItem): void
    {
        // If quantity was changed, adjust product quantity accordingly
        if ($purchaseInvoiceItem->isDirty('quantity')) {
            $product = $purchaseInvoiceItem->product;
            $originalQuantity = $purchaseInvoiceItem->getOriginal('quantity');
            $newQuantity = $purchaseInvoiceItem->quantity;
            $difference = $newQuantity - $originalQuantity;

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
     * Handle the PurchaseInvoiceItem "deleted" event.
     */
    public function deleted(PurchaseInvoiceItem $purchaseInvoiceItem): void
    {
        // Remove quantity from product when a purchase invoice item is deleted
        $product = $purchaseInvoiceItem->product;
        $product->quantity -= $purchaseInvoiceItem->quantity;
        $product->save();
    }

    /**
     * Handle the PurchaseInvoiceItem "restored" event.
     */
    public function restored(PurchaseInvoiceItem $purchaseInvoiceItem): void
    {
        //
    }

    /**
     * Handle the PurchaseInvoiceItem "force deleted" event.
     */
    public function forceDeleted(PurchaseInvoiceItem $purchaseInvoiceItem): void
    {
        //
    }
}
