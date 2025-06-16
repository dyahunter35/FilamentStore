<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductCategoryResource\Pages;
use App\Models\ProductCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProductCategoryResource extends Resource
{
    protected static ?string $model = ProductCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(__('product_category.sections.base_information.title'))
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label(__('product_category.fields.name.label'))
                            ->placeholder(__('product_category.fields.name.placeholder'))
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                fn(string $context, $state, callable $set) =>
                                $context === 'create' ? $set('slug', Str::slug($state)) : null
                            ),

                        Forms\Components\TextInput::make('slug')
                            ->label(__('product_category.fields.slug.label'))
                            ->placeholder(__('product_category.fields.slug.placeholder'))
                            ->required()
                            ->maxLength(255)
                            ->unique(ProductCategory::class, 'slug', ignoreRecord: true)
                            ->rules(['alpha_dash']),

                        Forms\Components\Select::make('parent_id')
                            ->label(__('product_category.fields.parent_id.label'))
                            ->placeholder(__('product_category.fields.parent_id.placeholder'))
                            ->relationship('parent', 'name')
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(),
                                Forms\Components\Textarea::make('description')
                                    ->rows(3),
                            ]),

                        Forms\Components\Textarea::make('description')
                            ->label(__('product_category.fields.description.label'))
                            ->placeholder(__('product_category.fields.description.placeholder'))
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make(__('product_category.sections.media.title'))
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label(__('product_category.fields.image.label'))
                            ->image()
                            ->imageEditor()
                            ->directory('categories/images')
                            ->visibility('public'),

                        Forms\Components\TextInput::make('icon')
                            ->label(__('product_category.fields.icon.label'))
                            ->placeholder(__('product_category.fields.icon.placeholder'))
                            ->helperText(__('product_category.fields.icon.helper'))
                            ->maxLength(100),
                    ])
                    ->columns(2),

                Forms\Components\Section::make(__('product_category.sections.settings.title'))
                    ->schema([
                        Forms\Components\TextInput::make('sort_order')
                            ->label(__('product_category.fields.sort_order.label'))
                            ->placeholder(__('product_category.fields.sort_order.placeholder'))
                            ->numeric()
                            ->default(0)
                            ->minValue(0),

                        Forms\Components\Toggle::make('is_active')
                            ->label(__('product_category.fields.is_active.label'))
                            ->default(true),

                        Forms\Components\Select::make('status')
                            ->label(__('product_category.fields.status.label'))
                            ->options([
                                'active' => __('product_category.fields.status.options.active'),
                                'inactive' => __('product_category.fields.status.options.inactive'),
                            ])
                            ->default('active')
                            ->required(),
                    ])
                    ->columns(3),

                Forms\Components\Section::make(__('product_category.sections.seo.title'))
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->label(__('product_category.fields.meta_title.label'))
                            ->placeholder(__('product_category.fields.meta_title.placeholder'))
                            ->maxLength(255),

                        Forms\Components\Textarea::make('meta_description')
                            ->label(__('product_category.fields.meta_description.label'))
                            ->placeholder(__('product_category.fields.meta_description.placeholder'))
                            ->rows(3)
                            ->maxLength(500),
                    ])
                    ->columns(1)
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('product_category.fields.image.label'))
                    ->circular()
                    ->size(40),

                Tables\Columns\TextColumn::make('name')
                    ->label(__('product_category.fields.name.label'))
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(function ($record) {
                        $indent = str_repeat('— ', $record->depth);
                        return $indent . $record->name;
                    }),

                Tables\Columns\TextColumn::make('slug')
                    ->label(__('product_category.fields.slug.label'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('parent.name')
                    ->label(__('product_category.fields.parent_id.label'))
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('products_count')
                    ->label(__('product_category.fields.products_count.label'))
                    ->counts('products')
                    ->badge()
                    ->color('primary'),

                Tables\Columns\TextColumn::make('children_count')
                    ->label(__('product_category.fields.children_count.label'))
                    ->counts('children')
                    ->badge()
                    ->color('info'),

                Tables\Columns\TextColumn::make('sort_order')
                    ->label(__('product_category.fields.sort_order.label'))
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\IconColumn::make('is_active')
                    ->label(__('product_category.fields.is_active.label'))
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('gray'),

                Tables\Columns\BadgeColumn::make('status')
                    ->label(__('product_category.fields.status.label'))
                    ->colors([
                        'success' => 'active',
                        'danger' => 'inactive',
                    ])
                    ->formatStateUsing(fn(string $state): string => __("product_category.fields.status.options.{$state}")),

                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('product_category.fields.created_at.label'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('product_category.fields.updated_at.label'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('parent_id')
                    ->label(__('product_category.fields.parent_id.label'))
                    ->relationship('parent', 'name')
                    ->searchable()
                    ->preload(),

                Tables\Filters\SelectFilter::make('status')
                    ->label(__('product_category.fields.status.label'))
                    ->options([
                        'active' => __('product_category.fields.status.options.active'),
                        'inactive' => __('product_category.fields.status.options.inactive'),
                    ]),

                Tables\Filters\TernaryFilter::make('is_active')
                    ->label(__('product_category.fields.is_active.label'))
                    ->placeholder(__('product_category.filters.is_active.all'))
                    ->trueLabel(__('product_category.filters.is_active.active_only'))
                    ->falseLabel(__('product_category.filters.is_active.inactive_only')),

                Tables\Filters\Filter::make('parent_categories')
                    ->label(__('product_category.filters.parent_categories'))
                    ->query(fn(Builder $query): Builder => $query->whereNull('parent_id')),

                Tables\Filters\Filter::make('child_categories')
                    ->label(__('product_category.filters.child_categories'))
                    ->query(fn(Builder $query): Builder => $query->whereNotNull('parent_id')),
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
                        ->label(__('product_category.actions.status.active.label'))
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->action(function ($records) {
                            $records->each(function ($record) {
                                $record->update(['status' => 'active', 'is_active' => true]);
                            });
                        })
                        ->requiresConfirmation(),
                    Tables\Actions\BulkAction::make('deactivate')
                        ->label(__('product_category.actions.status.inactive.label'))
                        ->icon('heroicon-o-x-circle')
                        ->color('danger')
                        ->action(function ($records) {
                            $records->each(function ($record) {
                                $record->update(['status' => 'inactive', 'is_active' => false]);
                            });
                        })
                        ->requiresConfirmation(),
                ]),
            ])
            ->defaultSort('sort_order');
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
            'index' => Pages\ListProductCategories::route('/'),
            'create' => Pages\CreateProductCategory::route('/create'),
            'view' => Pages\ViewProductCategory::route('/{record}'),
            'edit' => Pages\EditProductCategory::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('product_category.navigation.plural_label');
    }

    public static function getModelLabel(): string
    {
        return __('product_category.navigation.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('product_category.navigation.plural_label');
    }
}
