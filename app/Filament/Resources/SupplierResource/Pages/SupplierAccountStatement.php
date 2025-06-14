<?php

namespace App\Filament\Resources\SupplierResource\Pages;

use Filament\Resources\Pages\Page;

class SupplierAccountStatement extends Page
{
    protected static string $resource = \App\Filament\Resources\SupplierResource::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.supplier-account-statement';

    // You might want to add a method to pass the supplier ID to the Livewire component
    // For example, by getting it from the URL or a filter form

}
