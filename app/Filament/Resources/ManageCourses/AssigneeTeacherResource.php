<?php

namespace App\Filament\Resources\ManageCourses;

use App\Filament\Resources\ManageCourses\AssigneeTeacherResource\Pages;
use App\Filament\Resources\ManageCourses\AssigneeTeacherResource\RelationManagers;
use App\Models\Course;
use App\Models\User;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;

class AssigneeTeacherResource extends Resource
{
    protected static ?string $model = Course::class;
    protected static ?string $slug  = "manage-courses/assignee-teachers";
    protected static ?string $navigationGroup = "Manage Courses";
    protected static ?string $label = "Assignee Teachers";
    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function can( string $action, $record="" ) : bool
    {
        return can_access_resource( 'Programmer' );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(Course::query()->where('assigned_teachers_ids', '!=', null))
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Course Title'),
                TextColumn::make('department')
                    ->searchable()
                    ->sortable()
                    ->label('Department'),
                TextColumn::make('semester')
                    ->searchable()
                    ->sortable()
                    ->label('Semester'),
                TextColumn::make('assigned_teachers_ids')
                    ->label('Assignee Teachers')
                    ->formatStateUsing(function ($state) {
                        $teacherIds = explode(',', $state);
                        $teacherNames = User::whereIn('id', $teacherIds)->pluck('name')->toArray();
                        return implode(', ', $teacherNames);
                    })
                    ->badge()
                    ->color('warning')
                    ->searchable()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Filter::make('cse')
                    ->query(fn ($query) => $query->where('department', 'CSE')),
                Filter::make('eee')
                    ->query(fn ($query) => $query->where('department', 'EEE')),
                Filter::make('ce')
                    ->query(fn ($query) => $query->where('department', 'Civil')),
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
            ->actions(create_table_actions([
                Tables\Actions\Action::make('editAssignee')
                    ->label('Edit Assignee')
                    ->icon('heroicon-o-pencil')
                    ->url(fn ($record) => static::getUrl('edit', ['record' => $record])),
            ],['edit','delete']))
            ->bulkActions(create_table_bulk_actions([],[],['restore','forceDelete', 'delete']));
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
            'index' => Pages\ListAssigneeTeachers::route('/'),
            'edit' => Pages\EditAssigneeTeacher::route('/edit/{record}'),
            'create' => Pages\ManageAsigneeTeachers::route('/create/{department}/{semester}')
        ];
    }
}
