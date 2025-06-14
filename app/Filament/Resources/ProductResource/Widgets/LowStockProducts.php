<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Product;

class LowStockProducts extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Product::query()
                    ->whereColumn('quantity', '<=', 'reorder_point')
            )
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Product'),
                Tables\Columns\TextColumn::make('quantity')->label('Quantity'),
                Tables\Columns\TextColumn::make('reorder_point')->label('Reorder Point'),
            ]);
    }
}
