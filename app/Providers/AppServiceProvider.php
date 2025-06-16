<?php

namespace App\Providers;

use App\Models\PurchaseInvoiceItem;
use App\Models\PurchaseReturn;
use App\Models\SalesInvoiceItem;
use App\Models\SalesReturn;
use App\Observers\PurchaseInvoiceItemObserver;
use App\Observers\PurchaseReturnObserver;
use App\Observers\SalesInvoiceItemObserver;
use App\Observers\SalesReturnObserver;
use BezhanSalleh\FilamentLanguageSwitch\Enums\Placement;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use Filament\Resources\Resource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Resource::scopeToTenant(false);

        // Register observers for inventory movement
        SalesInvoiceItem::observe(SalesInvoiceItemObserver::class);
        PurchaseInvoiceItem::observe(PurchaseInvoiceItemObserver::class);
        SalesReturn::observe(SalesReturnObserver::class);
        PurchaseReturn::observe(PurchaseReturnObserver::class);

        
    }
}
