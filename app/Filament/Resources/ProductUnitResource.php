<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductUnitResource\Pages;
use App\Models\ProductUnit;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductUnitResource extends Resource
{
    use \App\Filament\Pages\Concerns\HasResource;

    protected static ?string $model = ProductUnit::class;

    protected static ?string $navigationIcon = 'heroicon-o-scale';

    protected static ?int $navigationSort = 2;

    protected static bool $isScopedToTenant = false;

    public static function form(Form $form): Form
    {
        static::translateConfigureForm();

        return $form
            ->schema([
                Forms\Components\Section::make(__('product_unit.sections.base_information.title'))
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(100),

                        Forms\Components\TextInput::make('symbol')
                            ->required()
                            ->maxLength(10),

                        Forms\Components\TextInput::make('abbreviation')
                            ->maxLength(20),

                        Forms\Components\Select::make('type')
                            ->label(__('product_unit.fields.type.label'))
                            ->options([
                                'quantity' => __('product_unit.fields.type.options.quantity'),
                                'weight' => __('product_unit.fields.type.options.weight'),
                                'volume' => __('product_unit.fields.type.options.volume'),
                                'length' => __('product_unit.fields.type.options.length'),
                                'area' => __('product_unit.fields.type.options.area'),
                                'container' => __('product_unit.fields.type.options.container'),
                                'special' => __('product_unit.fields.type.options.special'),
                            ])
                            ->required(),

                        Forms\Components\Textarea::make('description')
                            ->label(__('product_unit.fields.description.label'))
                            ->placeholder(__('product_unit.fields.description.placeholder'))
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make(__('product_unit.sections.conversion_settings.title'))
                    ->schema([
                        Forms\Components\Toggle::make('base_unit')
                            ->default(false)
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $set) {
                                if ($state) {
                                    $set('conversion_factor', 1.0);
                                }
                            }),

                        Forms\Components\TextInput::make('conversion_factor')
                            ->numeric()
                            ->step(0.000001)
                            ->minValue(0.000001)
                            ->default(1.0)
                            ->required()
                            ->disabled(fn(callable $get) => $get('base_unit')),

                        Forms\Components\Select::make('status')
                            ->label(__('product_unit.fields.status.label'))
                            ->options([
                                'active' => __('product_unit.fields.status.options.active'),
                                'inactive' => __('product_unit.fields.status.options.inactive'),
                            ])
                            ->default('active')
                            ->required(),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        static::translateConfigureTable();
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('symbol')
                    ->searchable()
                    ->badge()
                    ->color('primary'),

                Tables\Columns\TextColumn::make('abbreviation')
                    ->searchable(),

                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->colors([
                        'primary' => 'quantity',
                        'success' => 'weight',
                        'info' => 'volume',
                        'warning' => 'length',
                        'danger' => 'area',
                        'secondary' => 'container',
                        'gray' => 'special',
                    ])
                    ->formatStateUsing(fn(string $state): string => __("product_unit.fields.type.options.{$state}")),

                Tables\Columns\IconColumn::make('base_unit')
                    ->label(__('product_unit.fields.base_unit.label'))
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('gray'),

                Tables\Columns\TextColumn::make('conversion_factor')
                    ->label(__('product_unit.fields.conversion_factor.label'))
                    ->numeric(decimalPlaces: 6)
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('status')
                    ->label(__('product_unit.fields.status.label'))
                    ->colors([
                        'success' => 'active',
                        'danger' => 'inactive',
                    ])
                    ->formatStateUsing(fn(string $state): string => __("product_unit.fields.status.options.{$state}")),

                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('product_unit.fields.created_at.label'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('product_unit.fields.updated_at.label'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->label(__('product_unit.fields.type.label'))
                    ->options([
                        'quantity' => __('product_unit.fields.type.options.quantity'),
                        'weight' => __('product_unit.fields.type.options.weight'),
                        'volume' => __('product_unit.fields.type.options.volume'),
                        'length' => __('product_unit.fields.type.options.length'),
                        'area' => __('product_unit.fields.type.options.area'),
                        'container' => __('product_unit.fields.type.options.container'),
                        'special' => __('product_unit.fields.type.options.special'),
                    ]),

                Tables\Filters\SelectFilter::make('status')
                    ->label(__('product_unit.fields.status.label'))
                    ->options([
                        'active' => __('product_unit.fields.status.options.active'),
                        'inactive' => __('product_unit.fields.status.options.inactive'),
                    ]),

                Tables\Filters\TernaryFilter::make('base_unit')
                    ->label(__('product_unit.fields.base_unit.label'))
                    ->placeholder(__('product_unit.filters.base_unit.all'))
                    ->trueLabel(__('product_unit.filters.base_unit.base_only'))
                    ->falseLabel(__('product_unit.filters.base_unit.derived_only')),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('activate')
                        ->label(__('product_unit.actions.status.active.label'))
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->action(function ($records) {
                            $records->each(function ($record) {
                                $record->update(['status' => 'active']);
                            });
                        })
                        ->requiresConfirmation(),
                    Tables\Actions\BulkAction::make('deactivate')
                        ->label(__('product_unit.actions.status.inactive.label'))
                        ->icon('heroicon-o-x-circle')
                        ->color('danger')
                        ->action(function ($records) {
                            $records->each(function ($record) {
                                $record->update(['status' => 'inactive']);
                            });
                        })
                        ->requiresConfirmation(),
                ]),
            ])
            ->defaultSort('type')
            ->groups([
                Tables\Grouping\Group::make('type')
                    ->label(__('product_unit.fields.type.label'))
                    ->getTitleFromRecordUsing(fn($record) => __("product_unit.fields.type.options.{$record->type}"))
                    ->collapsible(),
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
            'index' => Pages\ListProductUnits::route('/'),
            'create' => Pages\CreateProductUnit::route('/create'),
            'view' => Pages\ViewProductUnit::route('/{record}'),
            'edit' => Pages\EditProductUnit::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('product_unit.navigation.plural_label');
    }

    public static function getModelLabel(): string
    {
        return __('product_unit.navigation.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('product_unit.navigation.plural_label');
    }
}
