<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class CustomerAccountStatement extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected static string $view = 'filament.resources.customer-resource.pages.account-statement';

    protected function getHeaderActions(): array
    {
        return [
            // Actions can be added here if needed
        ];
    }

    // You might want to add a method to pass the customer ID to the Livewire component
    // For example, by getting it from the URL or a filter form
}
