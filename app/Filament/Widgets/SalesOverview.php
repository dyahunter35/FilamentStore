<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\SalesInvoice;
use Carbon\Carbon;

class SalesOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $todaySales = SalesInvoice::whereDate('date', Carbon::today())->sum('final_amount');
        $thisMonthSales = SalesInvoice::whereMonth('date', Carbon::now()->month)
            ->whereYear('date', Carbon::now()->year)
            ->sum('final_amount');
        $totalSales = SalesInvoice::sum('final_amount');

        return [
            Stat::make('Today\'s Sales', number_format($todaySales, 2)),
            Stat::make('This Month\'s Sales', number_format($thisMonthSales, 2)),
            Stat::make('Total Sales', number_format($totalSales, 2)),
        ];
    }
}
