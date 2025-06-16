<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class PurchaseReport extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.purchase-report';

    public static function getNavigationLabel(): string
    {
        return __('reports.navigations.purchases.label');
    }
    public static function getNavigationGroup(): ?string
    {
        return __('reports.navigation.group');
    }
    // You might want to add methods here to pass data or handle actions
}
