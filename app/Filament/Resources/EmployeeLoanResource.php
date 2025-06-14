<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeLoanResource\Pages;
use App\Filament\Resources\EmployeeLoanResource\RelationManagers;
use App\Models\EmployeeLoan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeLoanResource extends Resource
{
    protected static ?string $model = EmployeeLoan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('employee_id')
                    ->relationship('employee', 'name')
                    ->required(),
                Forms\Components\TextInput::make('amount')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('deduction_amount_per_month')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('remaining_amount')
                    ->numeric()
                    ->required(),
                Forms\Components\DatePicker::make('date_granted')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('employee.name')->label('Employee'),
                Tables\Columns\TextColumn::make('amount')->money('usd', true),
                Tables\Columns\TextColumn::make('deduction_amount_per_month')->money('usd', true),
                Tables\Columns\TextColumn::make('remaining_amount')->money('usd', true),
                Tables\Columns\TextColumn::make('date_granted')->date(),
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
            'index' => Pages\ListEmployeeLoans::route('/'),
            'create' => Pages\CreateEmployeeLoan::route('/create'),
            'edit' => Pages\EditEmployeeLoan::route('/{record}/edit'),
        ];
    }
}
