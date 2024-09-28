<?php

namespace App\Filament\Admin\Settings;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Filament\Resources\Settings;
use App\Models\Course;
use App\Models\Department;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 23;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Course Title')
                    ->label('Course Title')
                    ->live(true)
                    ->afterStateUpdated(function(Set $set, $state){
                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Course Slug')
                    ->label('Course Slug')
                    ->unique(
                        table:'courses',
                        column:'slug',
                        ignoreRecord: true,
                    ),
                Forms\Components\Select::make('department')
                    ->required()
                    ->options(Department::all()->pluck('short_title', 'slug')),
                Forms\Components\Select::make('semester')
                    ->required()
                    ->options([
                        '1st' => 'First',
                        '2nd' => 'Second',
                        '3rd' => 'Third',
                        '4th' => 'Fourth',
                        '5th' => 'Fifth',
                        '6th' => 'Sixth',
                        '7th' => 'Seventh',
                        '8th' => 'Eighth',
                    ]),
                RichEditor::make('description')
                    ->columnSpan('full')
                    ->extraAttributes(['style' => 'min-height: 500px']),
            ]);
    }

    /**
     * @throws \Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Course Title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Course Slug')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('department')
                    ->label('Department')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(function ($state, $record) {
                        $department = Department::where('slug', $record->department)->firstOrFail();
                        return $department->short_title;
                    }),
                Tables\Columns\TextColumn::make('semester')
                    ->label('Semester')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('1stSemester')
                    ->label('1st Semester')
                    ->query(fn (Builder $query): Builder => $query->where('semester', '1st')),
                Tables\Filters\Filter::make('2ndSemester')
                    ->label('2nd Semester')
                    ->query(fn (Builder $query): Builder => $query->where('semester', '2nd')),
                Tables\Filters\Filter::make('3rdSemester')
                    ->label('3rd Semester')
                    ->query(fn (Builder $query): Builder => $query->where('semester', '3rd')),
                Tables\Filters\Filter::make('4thSemester')
                    ->label('4th Semester')
                    ->query(fn (Builder $query): Builder => $query->where('semester', '4th')),
                Tables\Filters\Filter::make('5thSemester')
                    ->label('5th Semester')
                    ->query(fn (Builder $query): Builder => $query->where('semester', '5th')),
                Tables\Filters\Filter::make('6thSemester')
                    ->label('6th Semester')
                    ->query(fn (Builder $query): Builder => $query->where('semester', '6th')),
                Tables\Filters\Filter::make('7thSemester')
                    ->label('7th Semester')
                    ->query(fn (Builder $query): Builder => $query->where('semester', '7th')),
                Tables\Filters\Filter::make('8thSemester')
                    ->label('8th Semester')
                    ->query(fn (Builder $query): Builder => $query->where('semester', '8th')),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->visible(fn (Course $record): bool => ! $record->trashed()),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
                Tables\Actions\ForceDeleteAction::make()
                    ->label('Permanently Delete'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make()
                        ->label("Permanently Delete"),
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
            'index' => \App\Filament\Admin\Settings\CourseResource\Pages\ListCourses::route('/'),
            'create' => \App\Filament\Admin\Settings\CourseResource\Pages\CreateCourse::route('/create'),
            'edit' => \App\Filament\Admin\Settings\CourseResource\Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
