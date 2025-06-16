<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use App\Models\SalesInvoice;
use App\Models\PurchaseInvoice;
use App\Models\Customer;
use App\Models\Supplier;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Products', Product::count())
                ->description('Total number of products in inventory')
                ->descriptionIcon('heroicon-m-cube')
                ->color('success')
                ->chart([
                    Product::where('created_at', '>=', now()->subDays(7))->count(),
                    Product::where('created_at', '>=', now()->subDays(6))->count(),
                    Product::where('created_at', '>=', now()->subDays(5))->count(),
                    Product::where('created_at', '>=', now()->subDays(4))->count(),
                    Product::where('created_at', '>=', now()->subDays(3))->count(),
                    Product::where('created_at', '>=', now()->subDays(2))->count(),
                    Product::where('created_at', '>=', now()->subDays(1))->count(),
                ]),

            Stat::make('Total Customers', Customer::count())
                ->description('Active customers')
                ->descriptionIcon('heroicon-m-users')
                ->color('info')
                ->chart([
                    Customer::where('created_at', '>=', now()->subDays(7))->count(),
                    Customer::where('created_at', '>=', now()->subDays(6))->count(),
                    Customer::where('created_at', '>=', now()->subDays(5))->count(),
                    Customer::where('created_at', '>=', now()->subDays(4))->count(),
                    Customer::where('created_at', '>=', now()->subDays(3))->count(),
                    Customer::where('created_at', '>=', now()->subDays(2))->count(),
                    Customer::where('created_at', '>=', now()->subDays(1))->count(),
                ]),

            Stat::make('Total Suppliers', Supplier::count())
                ->description('Active suppliers')
                ->descriptionIcon('heroicon-m-building-storefront')
                ->color('warning')
                ->chart([
                    Supplier::where('created_at', '>=', now()->subDays(7))->count(),
                    Supplier::where('created_at', '>=', now()->subDays(6))->count(),
                    Supplier::where('created_at', '>=', now()->subDays(5))->count(),
                    Supplier::where('created_at', '>=', now()->subDays(4))->count(),
                    Supplier::where('created_at', '>=', now()->subDays(3))->count(),
                    Supplier::where('created_at', '>=', now()->subDays(2))->count(),
                    Supplier::where('created_at', '>=', now()->subDays(1))->count(),
                ]),
        ];
    }
}
