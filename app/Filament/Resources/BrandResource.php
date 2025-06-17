<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandResource\Pages;
use App\Models\Brand;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BrandResource extends Resource
{
    use \App\Filament\Pages\Concerns\HasResource;
    
    protected static ?string $model = Brand::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationGroup = 'Product Management';

    protected static ?int $navigationSort = 1;

    protected static bool $isScopedToTenant = false;

    public static function form(Form $form): Form
    {
        static::translateConfigureForm();
        return $form
            ->schema([
                
                Forms\Components\Grid::make()
                ->schema([

                Forms\Components\Section::make(__('brand.sections.base_information.title'))
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label(__('brand.fields.name.label'))
                            ->placeholder(__('brand.fields.name.placeholder'))
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Textarea::make('description')
                            ->label(__('brand.fields.description.label'))
                            ->placeholder(__('brand.fields.description.placeholder'))
                            ->rows(3)
                    ])
                    ->columns(2),

                Forms\Components\Section::make(__('brand.sections.company_information.title'))
                    ->schema([
                        Forms\Components\TextInput::make('website')
                            ->label(__('brand.fields.website.label'))
                            ->placeholder(__('brand.fields.website.placeholder'))
                            ->url()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('country')
                            ->label(__('brand.fields.country.label'))
                            ->placeholder(__('brand.fields.country.placeholder'))
                            ->maxLength(100),

                        Forms\Components\TextInput::make('established_year')
                            ->label(__('brand.fields.established_year.label'))
                            ->placeholder(__('brand.fields.established_year.placeholder'))
                            ->numeric()
                            ->minValue(1800)
                            ->maxValue(date('Y')),

                        Forms\Components\Select::make('status')
                            ->label(__('brand.fields.status.label'))
                            ->options([
                                'active' => __('brand.fields.status.options.active'),
                                'inactive' => __('brand.fields.status.options.inactive'),
                            ])
                            ->default('active')
                            ->required(),
                    ])
                    ->columns(2),
                ])->columnSpan(2),
                Forms\Components\Section::make(__('brand.sections.other.title'))
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('logo')
                            ->collection('brand_logo')
                            ->imageEditor()
                            ,
                    ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('logo')
                    ->collection('brand_logo')
                    ->label(__('brand.fields.logo.label'))
                    ->circular()
                    ->size(40),

                Tables\Columns\TextColumn::make('name')
                    ->label(__('brand.fields.name.label'))
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('country')
                    ->label(__('brand.fields.country.label'))
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('established_year')
                    ->label(__('brand.fields.established_year.label'))
                    ->sortable(),

                Tables\Columns\TextColumn::make('website')
                    ->label(__('brand.fields.website.label'))
                    ->url(fn($record) => $record->website)
                    ->openUrlInNewTab()
                    ->limit(30),

                Tables\Columns\TextColumn::make('status')
                    ->label(__('brand.fields.status.label'))
                    ->badge()
                    ->colors([
                        'success' => 'active',
                        'danger' => 'inactive',
                    ])
                    ->formatStateUsing(fn(string $state): string => __("brand.fields.status.options.{$state}")),

                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('brand.fields.created_at.label'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('brand.fields.updated_at.label'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label(__('brand.fields.status.label'))
                    ->options([
                        'active' => __('brand.fields.status.options.active'),
                        'inactive' => __('brand.fields.status.options.inactive'),
                    ]),

                Tables\Filters\SelectFilter::make('country')
                    ->label(__('brand.fields.country.label'))
                    ->options(function () {
                        return Brand::query()
                            ->whereNotNull('country')
                            ->distinct()
                            ->pluck('country', 'country')
                            ->toArray();
                    }),
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
                        ->label(__('brand.actions.status.active.label'))
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->action(function ($records) {
                            $records->each(function ($record) {
                                $record->update(['status' => 'active']);
                            });
                        })
                        ->requiresConfirmation(),
                    Tables\Actions\BulkAction::make('deactivate')
                        ->label(__('brand.actions.status.inactive.label'))
                        ->icon('heroicon-o-x-circle')
                        ->color('danger')
                        ->action(function ($records) {
                            $records->each(function ($record) {
                                $record->update(['status' => 'inactive']);
                            });
                        })
                        ->requiresConfirmation(),
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
            'index' => Pages\ListBrands::route('/'),
            'create' => Pages\CreateBrand::route('/create'),
            'view' => Pages\ViewBrand::route('/{record}'),
            'edit' => Pages\EditBrand::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('brand.navigation.plural_label');
    }

    public static function getModelLabel(): string
    {
        return __('brand.navigation.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('brand.navigation.plural_label');
    }
}
