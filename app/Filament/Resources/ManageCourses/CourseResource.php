<?php

namespace App\Filament\Resources\ManageCourses;

use App\Filament\Resources\ManageCourses\CourseResource\Pages;
use App\Models\Course;
use App\Models\Department;
use App\Traits\HasResourceAccess;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;

class CourseResource extends Resource
{
    use HasResourceAccess;

    protected static ?string $model = Course::class;

    protected static ?string $navigationGroup = 'Manage Courses';

    protected static ?string $label = 'Courses';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Course Title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('code')
                    ->required()
                    ->label('Course Code')
                    ->unique('courses', 'code', ignoreRecord: true)
                    ->maxLength(255),
                TextInput::make('credit')
                    ->label('Course credit')
                    ->required()
                    ->maxLength(255),
                Select::make('department')
                    ->required()
                    ->label('Select A Department')
                    ->options(Department::all()->pluck('short_title', 'short_title')),
                Select::make('type')
                    ->label('Course Type')
                    ->options([
                        'theory' => 'Theory',
                        'lab' => 'Lab',
                        'thesis' => 'Thesis',
                    ]),
                Select::make('semester')
                    ->label('Semester')
                    ->options([
                        '1st' => '1st',
                        '2nd' => '2nd',
                        '3rd' => '3rd',
                        '4th' => '4th',
                        '5th' => '5th',
                        '6th' => '6th',
                        '7th' => '7th',
                        '8th' => '8th',
                    ])
                    ->required(),
                RichEditor::make('description')
                    ->label('Course Description')
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Course Title'),
                TextColumn::make('department')
                    ->searchable()
                    ->sortable()
                    ->label('Department'),
                TextColumn::make('type')
                    ->searchable()
                    ->sortable()
                    ->label('Course Type'),
                TextColumn::make('code')
                    ->searchable()
                    ->badge()
                    ->color('warning')
                    ->searchable()
                    ->sortable()
                    ->label('Course Code'),
                TextColumn::make('credit')
                    ->searchable()
                    ->sortable()
                    ->label('Course Credit'),
                TextColumn::make('semester')
                    ->searchable()
                    ->sortable()
                    ->label('Semester'),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Filter::make('1st Semester')
                    ->query(fn ($query) => $query->where('semester', '1st')),
                Filter::make('2nd Semester')
                    ->query(fn ($query) => $query->where('semester', '2nd')),
                Filter::make('3rd Semester')
                    ->query(fn ($query) => $query->where('semester', '3rd')),
                Filter::make('4th Semester')
                    ->query(fn ($query) => $query->where('semester', '4th')),
                Filter::make('5th Semester')
                    ->query(fn ($query) => $query->where('semester', '5th')),
                Filter::make('6th Semester')
                    ->query(fn ($query) => $query->where('semester', '6th')),
                Filter::make('7th Semester')
                    ->query(fn ($query) => $query->where('semester', '7th')),
                Filter::make('8th Semester')
                    ->query(fn ($query) => $query->where('semester', '8th')),
            ])
            ->actions(create_table_actions())
            ->bulkActions(create_table_bulk_actions());
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
