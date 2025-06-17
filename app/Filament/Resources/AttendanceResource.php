<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendanceResource\Pages;
use App\Filament\Resources\AttendanceResource\RelationManagers;
use App\Models\Attendance;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttendanceResource extends Resource
{
    use \App\Filament\Pages\Concerns\HasResource;

    protected static ?string $model = Attendance::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        static::translateConfigureForm();
        return $form
            ->schema([
                Forms\Components\Select::make('employee_id')
                    ->label('Employee')
                    ->options(\App\Models\Employee::all()->pluck('name', 'id'))
                    ->required(),
                Forms\Components\DatePicker::make('date')
                    ->default(now())
                    ->required(),
                Forms\Components\TimePicker::make('clock_in_time')
                    ->default(now())
                    ->nullable(),
                Forms\Components\TimePicker::make('clock_out_time')
                    ->default(now())
                    ->nullable(),
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
                Tables\Columns\TextColumn::make('employee.name')
                    ->label('Employee')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->sortable(),
                Tables\Columns\TextColumn::make('clock_in_time'),
                Tables\Columns\TextColumn::make('clock_out_time'),
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
                Tables\Filters\Filter::make('month')
                    ->form([
                        Forms\Components\DatePicker::make('month')
                            ->label('Select Month')
                            ->displayFormat('F Y')
                            ->withoutTime()
                    ])
                    ->query(function (Builder $query, array $data) {
                        if (empty($data['month'])) {
                            return;
                        }
                        $query->whereMonth('date', '=', date('m', strtotime($data['month'])))
                            ->whereYear('date', '=', date('Y', strtotime($data['month'])));
                    }),
                Tables\Filters\Filter::make('week')
                    ->form([
                        Forms\Components\DatePicker::make('week')
                            ->label('Select Week (pick any day in week)')
                            ->withoutTime()
                    ])
                    ->query(function (Builder $query, array $data) {
                        if (empty($data['week'])) {
                            return;
                        }
                        $date = \Carbon\Carbon::parse($data['week']);
                        $query->whereBetween('date', [$date->startOfWeek(), $date->endOfWeek()]);
                    }),
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
            'index' => Pages\ListAttendances::route('/'),
            'create' => Pages\CreateAttendance::route('/create'),
            'edit' => Pages\EditAttendance::route('/{record}/edit'),
        ];
    }
}
