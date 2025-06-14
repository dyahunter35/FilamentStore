<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CurrencyTransferResource\Pages;
use App\Filament\Resources\CurrencyTransferResource\RelationManagers;
use App\Models\CurrencyTransfer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CurrencyTransferResource extends Resource
{
    protected static ?string $model = CurrencyTransfer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('from_currency_id')
                    ->relationship('fromCurrency', 'name')
                    ->required(),
                Forms\Components\Select::make('to_currency_id')
                    ->relationship('toCurrency', 'name')
                    ->required(),
                Forms\Components\TextInput::make('amount')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('converted_amount')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('exchange_rate_used')
                    ->numeric()
                    ->required(),
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255)
                    ->nullable(),
                Forms\Components\Select::make('branch_id')
                    ->relationship('branch', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fromCurrency.name')->label('From Currency'),
                Tables\Columns\TextColumn::make('toCurrency.name')->label('To Currency'),
                Tables\Columns\TextColumn::make('amount'),
                Tables\Columns\TextColumn::make('converted_amount'),
                Tables\Columns\TextColumn::make('exchange_rate_used'),
                Tables\Columns\TextColumn::make('date')->date(),
                Tables\Columns\TextColumn::make('branch.name')->label('Branch'),
                Tables\Columns\TextColumn::make('description')->limit(30),
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
            'index' => Pages\ListCurrencyTransfers::route('/'),
            'create' => Pages\CreateCurrencyTransfer::route('/create'),
            'edit' => Pages\EditCurrencyTransfer::route('/{record}/edit'),
        ];
    }
}
