<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InventoryReconciliationResource\Pages;
use App\Filament\Resources\InventoryReconciliationResource\RelationManagers;
use App\Models\InventoryReconciliation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InventoryReconciliationResource extends Resource
{
    protected static ?string $model = InventoryReconciliation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('reference')
                    ->label('Reference')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date')
                    ->label('Date')
                    ->required(),
                Forms\Components\Repeater::make('items')
                    ->label('Reconciliation Items')
                    ->relationship('items')
                    ->schema([
                        Forms\Components\Select::make('product_id')
                            ->label('Product')
                            ->relationship('product', 'name')
                            ->required(),
                        Forms\Components\TextInput::make('system_quantity')
                            ->label('System Quantity')
                            ->numeric()
                            ->disabled()
                            ->dehydrated(),
                        Forms\Components\TextInput::make('actual_quantity')
                            ->label('Actual Quantity')
                            ->numeric()
                            ->required()
                            ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                $system = $get('system_quantity') ?? 0;
                                $set('difference', $state - $system);
                            }),
                        Forms\Components\TextInput::make('difference')
                            ->label('Difference')
                            ->numeric()
                            ->disabled(),
                        Forms\Components\TextInput::make('notes')
                            ->label('Notes')
                            ->maxLength(255),
                    ])
                    ->createItemButtonLabel('Add Product'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInventoryReconciliations::route('/'),
            'create' => Pages\CreateInventoryReconciliation::route('/create'),
            'edit' => Pages\EditInventoryReconciliation::route('/{record}/edit'),
        ];
    }
}
