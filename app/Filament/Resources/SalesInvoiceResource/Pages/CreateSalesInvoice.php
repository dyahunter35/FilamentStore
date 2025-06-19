<?php

namespace App\Filament\Resources\SalesInvoiceResource\Pages;

use App\Filament\Resources\SalesInvoiceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSalesInvoice extends CreateRecord
{
    protected static string $resource = SalesInvoiceResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $items = $data['items'] ?? [];
        $totalAmount = collect($items)->sum('subtotal');
        $discount = $data['discount'] ?? 0;
        $finalAmount = $totalAmount - $discount;

        return array_merge($data, [
            'total_amount' => $totalAmount,
            'final_amount' => $finalAmount,
        ]);
    }
}
