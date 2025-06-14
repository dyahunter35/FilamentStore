<?php

namespace App\Observers;

use App\Models\SalesReturn;

class SalesReturnObserver
{
    /**
     * Handle the SalesReturn "created" event.
     */
    public function created(SalesReturn $salesReturn): void
    {
        // Increase product quantity when items are returned
        $product = $salesReturn->product;
        $product->quantity += $salesReturn->quantity;
        $product->save();
    }

    /**
     * Handle the SalesReturn "updated" event.
     */
    public function updated(SalesReturn $salesReturn): void
    {
        // If quantity was changed, adjust product quantity accordingly
        if ($salesReturn->isDirty('quantity')) {
            $product = $salesReturn->product;
            $originalQuantity = $salesReturn->getOriginal('quantity');
            $newQuantity = $salesReturn->quantity;
            $difference = $newQuantity - $originalQuantity;

            // Add the difference to product quantity
            $product->quantity += $difference;
            $product->save();
        }
    }

    /**
     * Handle the SalesReturn "deleted" event.
     */
    public function deleted(SalesReturn $salesReturn): void
    {
        // Remove quantity from product when a return record is deleted
        $product = $salesReturn->product;
        $product->quantity -= $salesReturn->quantity;
        $product->save();
    }

    /**
     * Handle the SalesReturn "restored" event.
     */
    public function restored(SalesReturn $salesReturn): void
    {
        //
    }

    /**
     * Handle the SalesReturn "force deleted" event.
     */
    public function forceDeleted(SalesReturn $salesReturn): void
    {
        //
    }
}
