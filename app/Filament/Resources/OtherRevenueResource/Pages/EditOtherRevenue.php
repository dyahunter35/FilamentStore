<?php

namespace App\Filament\Resources\OtherRevenueResource\Pages;

use App\Filament\Resources\OtherRevenueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOtherRevenue extends EditRecord
{
    protected static string $resource = OtherRevenueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
