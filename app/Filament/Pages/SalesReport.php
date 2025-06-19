<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class SalesReport extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.sales-report';

    protected static bool $shouldRegisterNavigation = false;

    public static function getNavigationLabel(): string
    {
        return __('reports.navigations.sales.label');
    }
    public static function getNavigationGroup(): ?string
    {
        return __('reports.navigation.group');
    }
    // You might want to add methods here to pass data or handle actions
}
