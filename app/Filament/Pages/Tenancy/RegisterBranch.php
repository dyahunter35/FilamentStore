<?php

namespace App\Filament\Pages\Tenancy;

use App\Models\Branch;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;

class RegisterBranch extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register Branch';
    }

    public function form(Form $form): Form
    {
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
                    ->live(),
                Forms\Components\TextInput::make('location')
                    ->label('Location')
                    ->maxLength(255),
                // ...
            ]);
    }

    protected function handleRegistration(array $data): Branch
    {
        $branch = Branch::create($data);

        $branch->members()->attach(auth()->user());

        return $branch;
    }
}
