<?php

namespace App\Observers;

use App\Models\PurchaseReturn;

class PurchaseReturnObserver
{
    /**
     * Handle the PurchaseReturn "created" event.
     */
    public function created(PurchaseReturn $purchaseReturn): void
    {
        // Decrease product quantity when items are returned to supplier
        $product = $purchaseReturn->product;
        $product->quantity -= $purchaseReturn->quantity;
        $product->save();
    }

    /**
     * Handle the PurchaseReturn "updated" event.
     */
    public function updated(PurchaseReturn $purchaseReturn): void
    {
        // If quantity was changed, adjust product quantity accordingly
        if ($purchaseReturn->isDirty('quantity')) {
            $product = $purchaseReturn->product;
            $originalQuantity = $purchaseReturn->getOriginal('quantity');
            $newQuantity = $purchaseReturn->quantity;
            $difference = $originalQuantity - $newQuantity;

            // Add the difference to product quantity
            $product->quantity += $difference;
            $product->save();
        }
    }

    /**
     * Handle the PurchaseReturn "deleted" event.
     */
    public function deleted(PurchaseReturn $purchaseReturn): void
    {
        // Add quantity back to product when a return record is deleted
        $product = $purchaseReturn->product;
        $product->quantity += $purchaseReturn->quantity;
        $product->save();
    }

    /**
     * Handle the PurchaseReturn "restored" event.
     */
    public function restored(PurchaseReturn $purchaseReturn): void
    {
        //
    }

    /**
     * Handle the PurchaseReturn "force deleted" event.
     */
    public function forceDeleted(PurchaseReturn $purchaseReturn): void
    {
        //
    }
}
