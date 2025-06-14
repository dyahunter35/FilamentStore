<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\PurchaseInvoice;
use Carbon\Carbon;
use Filament\Widgets\Concerns\CanPoll;

class PurchasesChart extends ChartWidget
{
    use CanPoll;

    protected static ?string $heading = 'Purchases Trend';

    protected function getData(): array
    {
        $labels = collect(range(0, 5))->map(function($i) {
            return Carbon::now()->subMonths($i)->format('M Y');
        })->reverse()->values();
        $purchases = collect(range(0, 5))->map(function($i) {
            $month = Carbon::now()->subMonths($i);
            return PurchaseInvoice::whereYear('date', $month->year)
                ->whereMonth('date', $month->month)
                ->sum('final_amount');
        })->reverse()->values();
        return [
            'datasets' => [
                [
                    'label' => 'Purchases',
                    'data' => $purchases,
                    'backgroundColor' => 'rgba(251,191,36,0.7)',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
