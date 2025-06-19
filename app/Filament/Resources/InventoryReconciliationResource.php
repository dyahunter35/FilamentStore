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
    use \App\Filament\Pages\Concerns\HasResource;

    protected static ?string $model = InventoryReconciliation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        static::translateConfigureForm();
        return $form
            ->schema([
                Forms\Components\TextInput::make('reference')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\Repeater::make('items')
                    ->relationship('items')
                    ->schema([
                        Forms\Components\Select::make('product_id')
                            ->relationship('product', 'name')
                            ->required(),
                        Forms\Components\TextInput::make('system_quantity')
                            ->numeric()
                            ->disabled()
                            ->dehydrated(),
                        Forms\Components\TextInput::make('actual_quantity')
                            ->numeric()
                            ->required()
                            ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                $system = $get('system_quantity') ?? 0;
                                $set('difference', $state - $system);
                            }),
                        Forms\Components\TextInput::make('difference')
                            ->numeric()
                            ->disabled(),
                        Forms\Components\TextInput::make('notes')
                            ->maxLength(255),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        static::translateConfigureTable();
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
