<?php

namespace App\Filament\Pages\Tenancy;

use App\Models\Branch;
use Filament\Forms\Components\TextInput;
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
                TextInput::make('name')
                ->required()
                    ->label('Branch Name')
                    ->maxLength(255)
                    ->unique(Branch::class, 'name', ignoreRecord: true),

                TextInput::make('location')
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
