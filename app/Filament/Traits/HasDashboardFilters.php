<?php
namespace App\Filament\Traits;

use Filament\Forms\Components\DatePicker;

trait HasDashboardFilters
{
    protected function getDefaultFilters(): array
    {
        return [
            'start_date' => now()->subMonth(),
            'end_date' => now(),
        ];
    }

    protected function getDashboardFilters(): array
    {
        return [
            DatePicker::make('start_date')
                ->label('From Date')
                ->default(now()->subMonth())
                ->reactive(), // Important for live updates

            DatePicker::make('end_date')
                ->label('To Date')
                ->default(now())
                ->reactive(),
        ];

    }
}
