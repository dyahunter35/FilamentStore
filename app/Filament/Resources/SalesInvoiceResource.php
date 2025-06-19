<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SalesInvoiceResource\Pages;
use App\Filament\Resources\SalesInvoiceResource\RelationManagers;
use App\Models\SalesInvoice;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Branch;
use App\Models\Customer;
use App\Models\Product;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\HtmlString;

class SalesInvoiceResource extends Resource
{
    use \App\Filament\Pages\Concerns\HasResource;

    protected static ?string $model = SalesInvoice::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        static::translateConfigureForm();

        return $form
            ->schema([
                Section::make(__('sales_invoice.sections.invoice_details'))
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Forms\Components\Select::make('customer_id')
                                    ->options(Customer::all()->pluck('name', 'id'))
                                    ->nullable()
                                    ->searchable(),
                                Forms\Components\DatePicker::make('date')
                                    ->required()
                                    ->default(now()),
                                Forms\Components\Select::make('status')
                                    ->options([
                                        'draft' => 'Draft',
                                        'completed' => 'Completed',
                                        'cancelled' => 'Cancelled',
                                    ])
                                    ->required()
                                    ->default('draft'),
                            ]),
                    ]),

                Section::make(__('sales_invoice.sections.items'))
                    ->schema([
                        Repeater::make('items')

                            ->relationship('items') // Assuming a hasMany relationship named 'items' in SalesInvoice model
                            ->schema([
                                Select::make('product_id')
                                    ->options(Product::all()->pluck('name', 'id'))
                                    ->required()
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, Set $set, Get $get) {
                                        $product = Product::find($state);
                                        if ($product) {
                                            $set('unit_price', $product->price);
                                            $set('subtotal', $product->price * $get('quantity'));
                                        }
                                    }),
                                TextInput::make('quantity')
                                    ->numeric()
                                    ->required()
                                    ->default(1)
                                    ->live()
                                    ->afterStateUpdated(function ($state, Set $set, Get $get) {
                                        $product = Product::find($get('product_id'));
                                        if ($product) {
                                            $set('subtotal', $product->price * $state);
                                        }
                                    }),
                                TextInput::make('unit_price')
                                    ->numeric()
                                    ->dehydrated(true)
                                    ->required()
                                    ->prefix('$')
                                    ->live()
                                    ->afterStateUpdated(function ($state, Set $set, Get $get) {
                                        $quantity = $get('quantity');
                                        $set('subtotal', $state * $quantity);
                                    }),
                                TextInput::make('subtotal')
                                    ->numeric()
                                    ->required()
                                    ->prefix('$')
                                    ->disabled(),
                            ])
                            ->columns(4)
                            ->defaultItems(1)
                            ->columnSpanFull()
                            ->live()
                            ->afterStateUpdated(function (Get $get, Set $set) {
                                self::updateTotals($get, $set);
                            })

                            ->deleteAction(function (Forms\Components\Actions\Action $action, Get $get, Set $set) {
                                $action->before(function () use ($get, $set) {
                                    self::updateTotals($get, $set);
                                });
                            }),
                    ]),

                Section::make('Totals')
                    ->schema([
                        TextInput::make('total_amount')
                            ->required()
                            ->dehydrated(true)
                            ->numeric()
                            ->prefix('$')
                            ->disabled(),
                        TextInput::make('discount')
                            ->required()
                            ->numeric()
                            ->default(0)
                            ->prefix('$')
                            ->live()
                            ->afterStateUpdated(function (Get $get, Set $set) {
                                self::updateTotals($get, $set);
                            }),
                        TextInput::make('final_amount')
                            ->required()
                            ->numeric()
                            ->prefix('$')
                            ->disabled(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('branch.name')
                    ->label('Branch')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('customer.name')
                    ->label('Customer')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_amount')
                    ->money('USD') // Assuming USD, change as needed
                    ->sortable(),
                Tables\Columns\TextColumn::make('discount')
                    ->money('USD') // Assuming USD, change as needed
                    ->sortable(),
                Tables\Columns\TextColumn::make('final_amount')
                    ->money('USD') // Assuming USD, change as needed
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
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
            'index' => Pages\ListSalesInvoices::route('/'),
            'create' => Pages\CreateSalesInvoice::route('/create'),
            'edit' => Pages\EditSalesInvoice::route('/{record}/edit'),
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

    // Add this method to associate the sales invoice with the current tenant
    protected static function mutateEloquentQueryToTenant(Builder $query): Builder
    {
        return $query->where('branch_id', filament()->getTenant()->id);
    }

     // Helper function to update totals
     public static function updateTotals(Get $get, Set $set): void
     {
         $items = $get('items');
         $totalAmount = collect($items)->sum('subtotal') ?? 0;
         $discount = $get('discount') ?? 0;
         // Ensure discount is not greater than total amount
         $discount = is_numeric($discount) ? $discount : 0; // Ensure discount is numeric

         $finalAmount = $totalAmount - $discount ?? 0;

         $set('total_amount', number_format($totalAmount, 2, '.', ''));
         $set('final_amount', number_format($finalAmount, 2, '.', ''));
     }
}
