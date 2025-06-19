<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeResource extends Resource
{
    use \App\Filament\Pages\Concerns\HasResource;

    protected static ?string $model = Employee::class;

    protected static bool $isScopedToTenant = false;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        static::translateConfigureForm();

        return $form
            ->columns(3)
            ->schema([
                Forms\Components\Grid::make()
                    ->columnSpan(2)
                    ->schema([

                        Forms\Components\Section::make(__('employee.sections.base_information'))
                            ->schema([
                                Forms\Components\TextInput::make('employee_id')
                                    ->required()
                                    ->default(fn() => Employee::generateEmpoloyeeNumber())
                                    ->maxLength(255)
                                    ->label(__('employee.fields.employee_id.label'))
                                    ->disabled()
                                    ->unique(ignoreRecord: true),
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('email')
                                    ->required()
                                    ->email()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true),
                                Forms\Components\TextInput::make('phone')
                                    ->tel()
                                    ->maxLength(255),
                            ])->columns(2),

                        Forms\Components\Section::make(__('employee.sections.employment_details'))
                            ->schema([

                                Forms\Components\TextInput::make('department')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('position')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\DatePicker::make('hire_date')
                                    ->nullable(),
                                Forms\Components\TextInput::make('salary')
                                    ->required()
                                    ->numeric()
                                    ->prefix('$')
                                    ->maxValue(999999999999999.99),
                                /* Forms\Components\Select::make('branches')
                                    ->relationship('branches', 'name')
                                    ->multiple()
                                    ->preload()
                                    ->required() */
                            ])->columns(2),

                        Forms\Components\Section::make(__('employee.sections.contact_information'))
                            ->schema([
                                Forms\Components\Textarea::make('address')
                                    ->nullable()
                                    ->rows(3),
                                Forms\Components\Textarea::make('emergency_contact')
                                    ->nullable()
                                    ->rows(3),
                                Forms\Components\Textarea::make('contact_info')
                                    ->nullable()
                                    ->rows(3)
                                    ->helperText('Additional contact information'),
                            ])->columns(1),
                    ]),
                Forms\Components\Section::make(__('employee.sections.other'))
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('avatar')
                            ->collection('employee_photo')
                            ->image()
                            ->maxSize(1024)
                            ->columnSpanFull(),

                        Forms\Components\Select::make('status')
                            ->options([
                                'active' => __('employee.fields.status.options.active'),
                                'inactive' => __('employee.fields.status.options.inactive'),
                            ])
                            ->default('active')
                            ->required(),
                        Forms\Components\MarkdownEditor::make('notes')
                            ->nullable()
                            ->columnSpanFull()

                    ])
                    ->columnSpan(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        static::translateConfigureTable();
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('avatar')
                    ->collection('employee_photo')
                    ->conversion('thumb')
                    ->circular()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('employee_id')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                 Tables\Columns\TextColumn::make('branches.name')
                    ->badge()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('department')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('salary')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hire_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'danger' => 'inactive',
                        'success' => 'active',
                    ]),
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
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                        'terminated' => 'Terminated',
                    ]),
                Tables\Filters\SelectFilter::make('branches')
                    ->relationship('branches', 'name'),
                Tables\Filters\SelectFilter::make('department')
                    ->options(fn() => Employee::distinct()->pluck('department', 'department')->toArray()),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('activate')
                        ->label('Activate')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->action(fn($records) => $records->each->update(['status' => 'active'])),
                    Tables\Actions\BulkAction::make('deactivate')
                        ->label('Deactivate')
                        ->icon('heroicon-o-x-circle')
                        ->color('danger')
                        ->action(fn($records) => $records->each->update(['status' => 'inactive'])),
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
