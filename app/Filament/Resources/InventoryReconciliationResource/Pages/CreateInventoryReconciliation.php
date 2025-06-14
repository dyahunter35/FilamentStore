<?php

namespace App\Filament\Resources\InventoryReconciliationResource\Pages;

use App\Filament\Resources\InventoryReconciliationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Product;

class CreateInventoryReconciliation extends CreateRecord
{
    protected static string $resource = InventoryReconciliationResource::class;

    protected function handleRecordCreation(array $data): \Illuminate\Database\Eloquent\Model
    {
        $record = parent::handleRecordCreation($data);
        // Update product quantities
        foreach ($record->items as $item) {
            $product = Product::find($item->product_id);
            if ($product) {
                $product->quantity = $item->actual_quantity;
                $product->save();
            }
        }
        return $record;
    }
}
