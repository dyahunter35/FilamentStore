<?php

namespace App\Filament\Resources\ExpenseResource\Pages;

use App\Filament\Resources\ExpenseResource;
use Filament\Resources\Pages\Page;

class ExpenseReport extends Page
{
    protected static string $resource = ExpenseResource::class;

    protected static string $view = 'filament.resources.expense-resource.pages.expense-report';
}
