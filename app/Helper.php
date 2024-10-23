<?php

use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

if( ! function_exists('create_model_tabs') ) {
    function create_model_tabs( Model $model, array $attributes = [] ) : array
    {
        $default = array(
            'all' => get_readable_classname($model),
            'archived' => 'Trash',
        );
        $attributes = array_merge($default, $attributes);
        $tabs = [];
        foreach( $attributes as $attribute => $value ) {
            switch ( $attribute ) {
                case 'all':
                    $tabs[$attribute] = Tab::make($value)->badge($model::count());
                    break;
                case 'archived':
                    $tabs[$attribute] = Tab::make($value)
                        ->badge($model::onlyTrashed()->count())
                        ->modifyQueryUsing(fn ($query) => $query->onlyTrashed());
                    break;
                default:
                    break;
            }
        }

        return $tabs;
    }
}

if( ! function_exists('create_table_actions') ) {
    function create_table_actions( $extraActions = [] ) : array
    {
        $actions = [
            Filament\Tables\Actions\EditAction::make()
                ->visible(fn ($record): bool => ! $record->trashed()),
            Filament\Tables\Actions\DeleteAction::make(),
            Filament\Tables\Actions\RestoreAction::make(),
            Filament\Tables\Actions\ForceDeleteAction::make()
                ->label('Permanently Delete'),
        ];

        if( $extraActions ) {
            $actions = array_merge( $actions, $extraActions );
        }

        return $actions;
    }
}

if( ! function_exists('create_table_bulk_actions') ) {
    function create_table_bulk_actions( $extraBulkActions = [], $extraActions = [] ) : array
    {
        $bulkActions = [
            Filament\Tables\Actions\DeleteBulkAction::make(),
            Filament\Tables\Actions\RestoreBulkAction::make(),
            Filament\Tables\Actions\ForceDeleteBulkAction::make()
                ->label("Permanently Delete"),
        ];
        if( $extraBulkActions ) {
            $bulkActions = array_merge( $bulkActions, $extraBulkActions );
        }
        $actions = [
            Filament\Tables\Actions\BulkActionGroup::make($bulkActions),
        ];

        if( $extraActions ) {
            $actions = array_merge( $actions, $extraActions );
        }

        return $actions;
    }
}

if( ! function_exists('get_readable_classname') ) {
    function get_readable_classname( $class ) : string
    {
        if( ! is_string($class) ) {
            $class = $class::class;
        }
        return Str::headline(Str::plural(class_basename($class)));
    }
}

if( ! function_exists('get_sub_page_layout_data') ) {
    function get_sub_page_layout_data( $routeKey, $routeValue, $cardTitle='', $mainContentCss = '', $sideNavCss ='' )
    {
        return [
            'routeKey' => $routeKey,
            'page' => $routeValue,
            'menu' => $routeKey.'.'.$routeValue,
            'cardTitle' => $cardTitle,
            'mainContentCss' => $mainContentCss,
            'sideNavCss' => $sideNavCss,
        ];
    }
}
