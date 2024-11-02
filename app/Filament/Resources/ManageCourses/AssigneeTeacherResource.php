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
            'index' => Pages\AssigneeIndex::route('/'),
            'manage' => Pages\ManageAsigneeTeachers::route('/manage/{department}/{semester}')
        ];
    }
}
