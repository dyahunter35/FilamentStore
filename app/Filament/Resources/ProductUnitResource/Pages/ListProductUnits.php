<?php

namespace App\Filament\Resources\ProductUnitResource\Pages;

use App\Filament\Resources\ProductUnitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductUnits extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = ProductUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

            Actions\CreateAction::make(),
        ];
    }
}
