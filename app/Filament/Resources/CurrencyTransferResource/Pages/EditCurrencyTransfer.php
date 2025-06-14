<?php

namespace App\Filament\Resources\CurrencyTransferResource\Pages;

use App\Filament\Resources\CurrencyTransferResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCurrencyTransfer extends EditRecord
{
    protected static string $resource = CurrencyTransferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
