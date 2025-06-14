<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Product;

class InventoryOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalInventoryValue = Product::all()->sum(function ($product) {
            return $product->price * $product->quantity;
        });

        $lowStockCount = Product::whereColumn('quantity', '<=', 'reorder_point')->count();

        $totalProducts = Product::count();

        return [
            Stat::make('Total Inventory Value', number_format($totalInventoryValue, 2)),
            Stat::make('Low Stock Items', $lowStockCount),
            Stat::make('Total Products', $totalProducts),
        ];
    }
}
