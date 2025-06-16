<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class InventoryReport extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.inventory-report';

    public static function getNavigationLabel(): string
    {
        return __('reports.navigations.inventory.label');
    }
    public static function getNavigationGroup(): ?string
    {
        return __('reports.navigation.group');
    }
    // You might want to add methods here to pass data or handle actions
}
