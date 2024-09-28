<?php

namespace App\Filament\Admin;

use App\Filament\Resources\NoticesResource\Pages;
use App\Filament\Resources\NoticesResource\RelationManagers;
use App\Models\Notice;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NoticesResource extends Resource
{
    protected static ?string $model = Notice::class;

    protected static ?string $navigationIcon = 'heroicon-o-bell-alert';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Notice Title'),
                Forms\Components\Select::make('type')
                    ->options([
                        'common' => 'Common',
                    ])
                    ->required(),
                Forms\Components\DatePicker::make('publish_date')
                    ->required(),
                Forms\Components\FileUpload::make('pdf')
                    ->required()
                    ->directory('notices')
                    ->disk('public')
                    ->maxSize('8192')
                    ->acceptedFileTypes(['application/pdf','pdf'])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

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
            'index' => \App\Filament\Admin\NoticesResource\Pages\ListNotices::route('/'),
            'create' => \App\Filament\Admin\NoticesResource\Pages\CreateNotices::route('/create'),
            'edit' => \App\Filament\Admin\NoticesResource\Pages\EditNotices::route('/{record}/edit'),
        ];
    }
}
