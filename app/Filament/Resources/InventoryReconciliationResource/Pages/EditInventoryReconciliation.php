<?php

namespace App\Filament\Resources\InventoryReconciliationResource\Pages;

use App\Filament\Resources\InventoryReconciliationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Product;

class EditInventoryReconciliation extends EditRecord
{
    protected static string $resource = InventoryReconciliationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(\Illuminate\Database\Eloquent\Model $record, array $data): \Illuminate\Database\Eloquent\Model
    {
        $record = parent::handleRecordUpdate($record, $data);
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
