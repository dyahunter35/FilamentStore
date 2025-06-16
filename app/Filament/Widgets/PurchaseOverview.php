<?php

namespace App\Filament\Widgets;

use App\Models\PurchaseInvoice;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class PurchaseOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $today = now()->toDateString();
        $thisMonth = now()->startOfMonth()->toDateString();
        $thisYear = now()->startOfYear()->toDateString();

        return [
            Stat::make('Today\'s Purchases', PurchaseInvoice::whereDate('date', $today)->sum('final_amount'))
                ->description('Total purchases made today')
                ->descriptionIcon('heroicon-m-shopping-cart')
                ->color('primary')
                ->chart(
                    PurchaseInvoice::query()
                        ->select(DB::raw('DATE(date) as purchase_date'), DB::raw('SUM(final_amount) as total'))
                        ->whereBetween('date', [now()->subDays(7), now()])
                        ->groupBy('purchase_date')
                        ->pluck('total')
                        ->toArray()
                ),

            Stat::make('This Month\'s Purchases', PurchaseInvoice::whereDate('date', '>=', $thisMonth)->sum('final_amount'))
                ->description('Total purchases this month')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('success')
                ->chart(
                    PurchaseInvoice::query()
                        ->select(DB::raw('DATE(date) as purchase_date'), DB::raw('SUM(final_amount) as total'))
                        ->whereBetween('date', [now()->startOfMonth(), now()])
                        ->groupBy('purchase_date')
                        ->pluck('total')
                        ->toArray()
                ),

            Stat::make('This Year\'s Purchases', PurchaseInvoice::whereDate('date', '>=', $thisYear)->sum('final_amount'))
                ->description('Total purchases this year')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('warning')
                ->chart(
                    PurchaseInvoice::query()
                        ->select(DB::raw('MONTH(date) as purchase_month'), DB::raw('SUM(final_amount) as total'))
                        ->whereYear('date', now()->year)
                        ->groupBy('purchase_month')
                        ->pluck('total')
                        ->toArray()
                )
        ];
    }
}
