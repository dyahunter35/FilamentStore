<?php

namespace App\Filament\Resources\ExchangeClientTransactionResource\Pages;

use App\Filament\Resources\ExchangeClientTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExchangeClientTransaction extends EditRecord
{
    protected static string $resource = ExchangeClientTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
