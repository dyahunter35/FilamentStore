<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExchangeClientTransactionResource\Pages;
use App\Filament\Resources\ExchangeClientTransactionResource\RelationManagers;
use App\Models\ExchangeClientTransaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExchangeClientTransactionResource extends Resource
{
    protected static ?string $model = ExchangeClientTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('exchange_client_id')
                    ->relationship('exchangeClient', 'name')
                    ->required(),
                Forms\Components\Select::make('currency_id')
                    ->relationship('currency', 'name')
                    ->required(),
                Forms\Components\TextInput::make('amount')
                    ->numeric()
                    ->required(),
                Forms\Components\Select::make('type')
                    ->options(['buy' => 'Buy', 'sell' => 'Sell'])
                    ->required(),
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\Select::make('branch_id')
                    ->relationship('branch', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('exchangeClient.name')->label('Client'),
                Tables\Columns\TextColumn::make('currency.name')->label('Currency'),
                Tables\Columns\TextColumn::make('amount'),
                Tables\Columns\TextColumn::make('type')->label('Type'),
                Tables\Columns\TextColumn::make('date')->date(),
                Tables\Columns\TextColumn::make('branch.name')->label('Branch'),
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
            'index' => Pages\ListExchangeClientTransactions::route('/'),
            'create' => Pages\CreateExchangeClientTransaction::route('/create'),
            'edit' => Pages\EditExchangeClientTransaction::route('/{record}/edit'),
        ];
    }
}
