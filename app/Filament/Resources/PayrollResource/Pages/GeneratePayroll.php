<?php

namespace App\Filament\Resources\PayrollResource\Pages;

use App\Filament\Resources\PayrollResource;
use Filament\Resources\Pages\Page;

class GeneratePayroll extends Page
{
    protected static string $resource = PayrollResource::class;

    protected static string $view = 'filament.resources.payroll-resource.pages.generate-payroll';
}
