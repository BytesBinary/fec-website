<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManageAccessResource\Pages;
use App\Models\Designation;
use App\Models\ResourceHasAccess;
use App\Traits\HasResourceAccess;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ManageAccessResource extends Resource
{
    use HasResourceAccess;

    protected static ?string $model = ResourceHasAccess::class;

    protected static ?string $navigationLabel = 'Resource Access Management';

    protected static ?string $navigationGroup = 'Roles';

    protected static ?string $navigationIcon = 'heroicon-o-shield-exclamation';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('resource_class')
                    ->formatStateUsing(function ($state) {
                        return class_basename($state);
                    })
                    ->label('Resource Class'),
                TextColumn::make('role_ids')
                    ->label('Role Designations')
                    ->formatStateUsing(function ($state) {
                        $role_ids = json_decode($state);
                        $roles = collect($role_ids)->map(function ($role_id) {
                            return Designation::find($role_id)->designation;
                        })->toArray();

                        return implode(', ', $roles);
                    })
                    ->badge(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions(create_table_actions())
            ->bulkActions(create_table_bulk_actions());
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListManageAccesses::route('/'),
            'create' => Pages\CreateAccessPage::route('/create'),
            'edit' => Pages\CreateAccessPage::route('/{record}/edit'),
        ];
    }
}
