<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\SalesInvoice;
use Carbon\Carbon;
use Filament\Widgets\Concerns\CanPoll;

class SalesChart extends ChartWidget
{
    use CanPoll;

    protected static ?string $heading = 'Sales Trend';

    protected function getData(): array
    {
        $labels = collect(range(0, 5))->map(function($i) {
            return Carbon::now()->subMonths($i)->format('M Y');
        })->reverse()->values();
        $sales = collect(range(0, 5))->map(function($i) {
            $month = Carbon::now()->subMonths($i);
            return SalesInvoice::whereYear('date', $month->year)
                ->whereMonth('date', $month->month)
                ->sum('final_amount');
        })->reverse()->values();
        return [
            'datasets' => [
                [
                    'label' => 'Sales',
                    'data' => $sales,
                    'backgroundColor' => 'rgba(59,130,246,0.7)',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
