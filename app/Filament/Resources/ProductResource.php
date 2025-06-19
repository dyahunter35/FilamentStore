<?php

namespace App\Filament\Resources;

use App\Filament\Pages\Concerns\HasResource;
use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Branch;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Support\HtmlString;
use Milon\Barcode\DNS1D;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorSVG;

class ProductResource extends Resource
{
    use HasResource;

    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        static::translateConfigureForm();

        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([

                                Forms\Components\Section::make(__('product.sections.base_information.title'))
                                    ->schema([

                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\Textarea::make('description')
                                            ->maxLength(65535),
                                        Forms\Components\Select::make('category_id')
                                            ->label(__('product.fields.category_id.label'))
                                            ->relationship('category', 'name')
                                            ->required()
                                            ->searchable()
                                            ->preload(),
                                        Forms\Components\Select::make('brand_id')
                                            ->label(__('product.fields.brand_id.label'))
                                            ->relationship('brand', 'name')
                                            ->required()
                                            ->searchable()
                                            ->preload(),
                                        Forms\Components\Select::make('unit_id')
                                            ->label(__('product.fields.unit_id.label'))
                                            ->relationship('unit', 'name')
                                            ->required()
                                            ->searchable()
                                            ->preload(),
                                    ])
                                    ->columns(2),
                                Forms\Components\Section::make(__('product.sections.pricing.title'))
                                    ->schema([
                                        Forms\Components\TextInput::make('price')
                                            ->required()
                                            ->numeric()
                                            ->prefix('$'),
                                        Forms\Components\TextInput::make('cost')
                                            ->required()
                                            ->numeric()
                                            ->prefix('$'),

                                    ])->columns(2),
                                Forms\Components\Section::make(__('product.sections.inventory.title'))
                                    ->schema([
                                        Forms\Components\TextInput::make('quantity')
                                            ->required()
                                            ->numeric()
                                            ->default(0),
                                        Forms\Components\TextInput::make('reorder_point')
                                            ->numeric()
                                            ->nullable(),
                                        Forms\Components\TextInput::make('barcode')
                                            ->unique(ignoreRecord: true)
                                            ->nullable()
                                            ->maxLength(255),
                                    ])->columns(2),
                                Forms\Components\Repeater::make('serial_numbers')
                                    ->schema([
                                        Forms\Components\TextInput::make('serial_number'),
                                    ])
                                    ->nullable()
                                    ->columnSpanFull()
                            ])->columnSpan(2),
                    ])->columnSpan(2),

                Forms\Components\Section::make(__('product.sections.other.title'))
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('image')
                            ->label(__('product.fields.image.label'))
                            ->collection('product_images')
                            ->columnSpanFull(),
                        /* Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                        Forms\Components\Toggle::make('is_featured')
                            ->label('Featured')
                            ->default(false), */
                    ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        static::translateConfigureTable();

        return $table
            ->columns([

                SpatieMediaLibraryImageColumn::make('image')
                    ->collection('product_images')
                    ->label(__('product.fields.image.label'))
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),



                Tables\Columns\TextColumn::make('price')
                    ->money('SDG') // Assuming USD, change as needed
                    ->sortable(),
                Tables\Columns\TextColumn::make('cost')
                    ->money('SDG') // Assuming USD, change as needed
                    ->sortable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('brand.name')
                    ->label(__('product.fields.brand_id.label'))

                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('barcode')
                    ->formatStateUsing(function ($state) {
                        $generator = new BarcodeGeneratorPNG();
                        $barcodeData = $generator->getBarcode($state, $generator::TYPE_EAN_13);
                        return '<img src="data:image/png;base64,' . base64_encode($barcodeData) . '" alt="barcode" style="height: 40px;"/>';
                    })
                    ->html()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('reorder_point')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    // Add this method to make the resource tenant-aware
    public static function getTenantModel(): ?string
    {
        return Branch::class;
    }

    // Add this method to associate the product with the current tenant
    protected static function mutateEloquentQueryToTenant(Builder $query): Builder
    {
        return $query->where('branch_id', filament()->getTenant()->id);
    }

    public static function getWidgets(): array
    {
        return [
            \App\Filament\Resources\ProductResource\Widgets\LowStockProducts::class,
        ];
    }
}
