<?php

namespace App\Filament\Resources\InventoryReconciliationResource\Pages;

use App\Filament\Resources\InventoryReconciliationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventoryReconciliations extends ListRecords
{
    protected static string $resource = InventoryReconciliationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
