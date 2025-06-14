<?php

namespace App\Filament\Resources\ExchangeClientResource\Pages;

use App\Filament\Resources\ExchangeClientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExchangeClients extends ListRecords
{
    protected static string $resource = ExchangeClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
