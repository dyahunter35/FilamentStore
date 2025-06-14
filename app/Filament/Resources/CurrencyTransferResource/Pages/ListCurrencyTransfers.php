<?php

namespace App\Filament\Resources\CurrencyTransferResource\Pages;

use App\Filament\Resources\CurrencyTransferResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCurrencyTransfers extends ListRecords
{
    protected static string $resource = CurrencyTransferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
