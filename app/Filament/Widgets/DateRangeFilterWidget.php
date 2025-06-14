<?php
namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Carbon;

class DateRangeFilterWidget extends Widget implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.widgets.date-range-filter-widget';

    protected int | string | array $columnSpan = 'full'; // Full width

    protected function getExtraAttributes(): array
{
    return [
        'class' => 'col-span-full', // Tailwind class for full width
    ];
}
    public $startDate;
    public $endDate;

    public function mount(): void
    {
        $this->form->fill([
            'startDate' => now()->subMonth()->format('Y-m-d'),
            'endDate' => now()->format('Y-m-d'),
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            Section::make('Date Range Filter')
                ->description('Select a date range to filter the data displayed in the charts.')
                ->columns(2)
                ->schema([
                    DatePicker::make('startDate')
                        ->label('From Date')
                        ->default(now()->subMonth()->format('Y-m-d'))
                        ->reactive()
                        ->afterStateUpdated(fn () => $this->updateFilters()),

                    DatePicker::make('endDate')
                        ->label('To Date')
                        ->default(now()->format('Y-m-d'))
                        ->reactive()
                        ->afterStateUpdated(fn () => $this->updateFilters()),
                ]),
        ];
    }

    public function updateFilters(): void
    {
        $this->emit('dateRangeUpdated', [
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
        ]);
    }
}
