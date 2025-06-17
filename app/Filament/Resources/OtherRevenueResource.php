<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OtherRevenueResource\Pages;
use App\Filament\Resources\OtherRevenueResource\RelationManagers;
use App\Models\OtherRevenue;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OtherRevenueResource extends Resource
{
    use \App\Filament\Pages\Concerns\HasResource;

    protected static ?string $model = OtherRevenue::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        static::translateConfigureForm();
        return $form
            ->schema([

                Forms\Components\TextInput::make('amount')
                    ->numeric()
                    ->required(),
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        static::translateConfigureTable();
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('amount')->money('USD', true),
                Tables\Columns\TextColumn::make('date')->date(),
                Tables\Columns\TextColumn::make('description')->limit(30),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
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

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ])
            ->where('branch_id', filament()->getTenant()->id);
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
            'index' => Pages\ListOtherRevenues::route('/'),
            'create' => Pages\CreateOtherRevenue::route('/create'),
            'edit' => Pages\EditOtherRevenue::route('/{record}/edit'),
        ];
    }
}
