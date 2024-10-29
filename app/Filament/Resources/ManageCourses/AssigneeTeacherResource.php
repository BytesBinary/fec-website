<?php

namespace App\Filament\Resources\ManageCourses;

use App\Filament\Resources\ManageCourses\AssigneeTeacherResource\Pages;
use App\Filament\Resources\ManageCourses\AssigneeTeacherResource\RelationManagers;
use App\Models\Course;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AssigneeTeacherResource extends Resource
{
    protected static ?string $model = Course::class;
    protected static ?string $slug  = "manage-courses/assignee-teachers";
    protected static ?string $navigationGroup = "Manage Courses";
    protected static ?string $label = "Assignee Teachers";
    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('assigned_teachers_ids')
                    ->label('Assignee Teachers')
                    ->multiple()
                    ->options(fn () => User::where('designation', 'teacher')->get()->pluck('name', 'id'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('code')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('assigned_teachers_ids')
                    ->label("Assigned Teachers")
                    ->badge()
                    ->formatStateUsing(function (string $state): string {
                        $teacher = User::find($state);
                        if( $teacher ) {
                            return $teacher['name'];
                        }
                        return 'Teacher Not Found';
                    })
                    ->color('success')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Assignee Teachers'),
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAssigneeCourses::route('/'),
            'create' => Pages\CreateAssigneeCourse::route('/create'),
            'edit' => Pages\EditAssigneeCourse::route('/{record}/edit'),
        ];
    }
}
