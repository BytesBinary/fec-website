<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcademicsResource\Pages;
use App\Models\AcademicsResources;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class AcademicsResource extends Resource
{
    protected static ?string $model = AcademicsResources::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Academic Resources';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->autofocus()
                    ->placeholder('Enter the title')
                    ->required(),
                Forms\Components\Select::make('type')
                    ->placeholder('Select a type')
                    ->options([
                        'notice' => 'Notice',
                        'syllabus' => 'Syllabus',
                        'calendar' => 'Academic Calendar',
                    ])
                    ->required(),
                Forms\Components\DatePicker::make('publish_date')
                    ->required(),
                FileUpload::make('pdf')
                    ->required()
                    ->acceptedFileTypes(['application/pdf','pdf'])
                    ->label('PDF File'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('publish_date')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pdf')
                    ->label('Uploaded File')
                    ->url(function ($state) {
                        return Storage::url($state);
                    }),
            ])
            ->filters([
                Tables\Filters\Filter::make('notice')
                    ->query(function ($query) {
                        return $query->where('type', 'notice');
                    })->label('Notice'),
                Tables\Filters\Filter::make('syllabus')
                    ->query(function ($query) {
                        return $query->where('type', 'syllabus');
                    })->label('Syllabus'),
                Tables\Filters\Filter::make('calendar')
                    ->query(function ($query) {
                        return $query->where('type', 'calendar');
                    })->label('Calendar'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function ($record) {
                        if ($record->pdf && Storage::exists('public/' . $record->pdf)) {
                            Storage::delete('public/' . $record->pdf);
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function ($record) {
                            if ($record->pdf && Storage::exists('public/' . $record->pdf)) {
                                Storage::delete('public/' . $record->pdf);
                            }
                        }),
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
            'index' => Pages\ListAcademics::route('/'),
            'create' => Pages\CreateAcademics::route('/create'),
            'view' => Pages\ViewAcademics::route('/{record}'),
            'edit' => Pages\EditAcademics::route('/{record}/edit'),
        ];
    }
}
