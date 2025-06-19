<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BranchResource\Pages;
use App\Filament\Resources\BranchResource\RelationManagers;
use App\Models\Branch;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BranchResource extends Resource
{
    use \App\Filament\Pages\Concerns\HasResource;

    protected static ?string $model = Branch::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $isScopedToTenant = false;

    protected static bool $shouldRegisterNavigation = true;


    public static function form(Form $form): Form
    {
        static::translateConfigureForm();
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->live()
                    ->afterStateUpdated(function (Forms\Components\TextInput $component, $state, $set) {
                        $set('slug', str()->slug($state));
                    })
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->dehydrated()
                    ->maxLength(255)
                    ->disabled()
                    ->unique(Branch::class, 'slug', ignoreRecord: true)
                    ->live()
                    ,
                Forms\Components\TextInput::make('location')
                    ->maxLength(255)
                    ->default(null),

                Forms\Components\Select::make('members')
                    ->relationship('members', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable()
            ]);
    }

    public static function table(Table $table): Table
    {
        static::translateConfigureTable();
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
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
            'index' => Pages\ListBranches::route('/'),
            'create' => Pages\CreateBranch::route('/create'),
            'edit' => Pages\EditBranch::route('/{record}/edit'),
        ];
    }
}
