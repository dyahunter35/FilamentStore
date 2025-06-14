<?php

namespace App\Filament\Resources\ExchangeClientResource\Pages;

use App\Filament\Resources\ExchangeClientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExchangeClient extends EditRecord
{
    protected static string $resource = ExchangeClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
