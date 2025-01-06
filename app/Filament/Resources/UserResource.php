<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\Designation;
use App\Models\User;
use App\Traits\HasResourceAccess;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class UserResource extends Resource
{
    use HasResourceAccess;

    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->placeholder('Enter Your Name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->placeholder('Enter Your Email')
                    ->unique('users', 'email', ignoreRecord: true)
                    ->required(),
                Select::make('designation')
                    ->label('Designation')
                    ->placeholder('Select Designation')
                    ->options(Designation::all()->pluck('designation', 'id')->toArray())
                    ->reactive()
                    ->required(),
                TextInput::make('short_name')
                    ->label('Short Name')
                    ->placeholder('Enter Your Short Name')
                    ->unique('users', 'short_name', ignoreRecord: true)
                    ->visible(function (Get $get) {
                        return $get('designation') !== 'Student';
                    })
                    ->required(),
                TextInput::make('password')
                    ->label('Enter password')
                    ->placeholder('Enter a password')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('designation')
                    ->label('Designation')
                    ->badge()
                    ->searchable()
                    ->sortable(),
                ToggleColumn::make('is_admin_verified')
                    ->label('Admin Verified')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->modifyQueryUsing(function (Builder $query) {
                return $query->where('id', '!=', auth()->id());
            })
            ->filters(static::getFilters([
                Filter::make('Verified')
                    ->query(fn ($query) => $query->where('is_admin_verified', 1)),
                Filter::make('Unverified')
                    ->query(fn ($query) => $query->where('is_admin_verified', 0)),
            ]))
            ->actions(create_table_actions([
            ]))
            ->bulkActions(create_table_bulk_actions([
                BulkAction::make('verify_users')
                    ->label('Verify Selected Users')
                    ->action(function (Collection $records) {
                        foreach ($records as $record) {
                            $record->is_admin_verified = true;
                            $record->save();
                        }
                        send_notification('success', 2000, 'Users verify successfully');
                    })
                    ->requiresConfirmation()
                    ->color('success')
                    ->icon('heroicon-s-check'),
                BulkAction::make('unverify_users')
                    ->label('Unverify Selected Users')
                    ->action(function (Collection $records, BulkAction $bulkAction) {
                        foreach ($records as $record) {
                            $record->is_admin_verified = false;
                            $record->email_verified_at = null;
                            $record->save();
                        }
                        send_notification('success', 5000, 'Users unverified successfully');
                    })
                    ->requiresConfirmation()
                    ->color('warning')
                    ->icon('heroicon-o-x-circle'),
            ]));
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    private static function getFilters(array $default_filters = [])
    {
        $desigantions = Designation::all()->toArray();

        foreach ($desigantions as $desigantion) {
            $default_filters[] = Filter::make($desigantion['designation'])
                ->query(fn ($query) => $query->where('designation', $desigantion['designation']));
        }

        return $default_filters;
    }
}
