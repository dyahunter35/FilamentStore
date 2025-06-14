<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WarehouseTransferResource\Pages;
use App\Models\WarehouseTransfer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class WarehouseTransferResource extends Resource
{
    protected static ?string $model = WarehouseTransfer::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationGroup = 'Inventory Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('from_branch_id')
                    ->relationship('fromBranch', 'name')
                    ->required(),
                Forms\Components\Select::make('to_branch_id')
                    ->relationship('toBranch', 'name')
                    ->required()
                    ->different('from_branch_id'),
                Forms\Components\Select::make('product_id')
                    ->relationship('product', 'name')
                    ->required()
                    ->searchable(),
                Forms\Components\TextInput::make('quantity')
                    ->required()
                    ->numeric()
                    ->minValue(1),
                Forms\Components\DatePicker::make('date')
                    ->required()
                    ->default(now()),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->default('pending')
                    ->disabled(fn ($record) => $record && $record->status !== 'pending')
                    ->required(),
                Forms\Components\Textarea::make('notes')
                    ->rows(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fromBranch.name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('toBranch.name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('product.name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\SelectColumn::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->disabled(fn ($record) => $record->status !== 'pending'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('complete')
                    ->action(function (WarehouseTransfer $record) {
                        if ($record->status === 'pending') {
                            // Decrease quantity from source branch
                            $fromProduct = $record->fromBranch->products()
                                ->where('product_id', $record->product_id)
                                ->first();

                            if ($fromProduct && $fromProduct->pivot->quantity >= $record->quantity) {
                                $record->fromBranch->products()
                                    ->updateExistingPivot($record->product_id, [
                                        'quantity' => $fromProduct->pivot->quantity - $record->quantity
                                    ]);

                                // Increase quantity in destination branch
                                $toProduct = $record->toBranch->products()
                                    ->where('product_id', $record->product_id)
                                    ->first();

                                if ($toProduct) {
                                    $record->toBranch->products()
                                        ->updateExistingPivot($record->product_id, [
                                            'quantity' => $toProduct->pivot->quantity + $record->quantity
                                        ]);
                                } else {
                                    $record->toBranch->products()
                                        ->attach($record->product_id, [
                                            'quantity' => $record->quantity
                                        ]);
                                }

                                $record->update(['status' => 'completed']);
                            }
                        }
                    })
                    ->requiresConfirmation()
                    ->visible(fn (WarehouseTransfer $record) => $record->status === 'pending')
                    ->color('success')
                    ->icon('heroicon-o-check'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWarehouseTransfers::route('/'),
            'create' => Pages\CreateWarehouseTransfer::route('/create'),
            'edit' => Pages\EditWarehouseTransfer::route('/{record}/edit'),
        ];
    }
}
