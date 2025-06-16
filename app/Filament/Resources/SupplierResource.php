<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupplierResource\Pages;
use App\Filament\Resources\SupplierResource\RelationManagers;
use App\Models\Supplier;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Branch;

class SupplierResource extends Resource
{
    use \App\Filament\Pages\Concerns\HasResource;

    protected static ?string $model = Supplier::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static bool $isScopedToTenant = false;

    public static function form(Form $form): Form
    {
        static::translateConfigureForm();
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([

                        Forms\Components\Section::make(__('supplier.sections.base_information.title'))
                            ->schema([


                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('phone')
                                    ->tel()
                                    ->nullable()
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('address')
                                    ->nullable()
                                    ->columnSpanFull(),
                                Forms\Components\TextInput::make('email')
                                    ->email()
                                    ->nullable()
                                    ->maxLength(255),

                            ])
                            ->columns(2),
                        Forms\Components\Section::make(__('supplier.sections.contact_information.title'))
                            ->schema([
                                Forms\Components\TextInput::make('contact_person')
                                    ->nullable()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('vat_number')
                                    ->nullable()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('website')
                                    ->url()
                                    ->nullable()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('bank_account')
                                    ->nullable()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('bank_name')
                                    ->nullable()
                                    ->maxLength(255),
                            ])->columns(2),
                    ])->columnSpan(2)

            ])->columns(3);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('branch.name')
                    ->label('Branch')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('contact_person')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('vat_number')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('website')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bank_account')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bank_name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSuppliers::route('/'),
            'create' => Pages\CreateSupplier::route('/create'),
            'edit' => Pages\EditSupplier::route('/{record}/edit'),
            'account-statement' => Pages\SupplierAccountStatement::route('/account-statement'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getTenantModel(): ?string
    {
        return Branch::class;
    }

    protected static function mutateEloquentQueryToTenant(Builder $query): Builder
    {
        return $query->where('branch_id', filament()->getTenant()->id);
    }
}
