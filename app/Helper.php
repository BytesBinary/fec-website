<?php

use Filament\Notifications\Notification;
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
    function create_table_actions( $extraActions = [], $removeActions = [] ) : array
    {
        $actions = [
            Filament\Tables\Actions\EditAction::make()
                ->visible(fn ($record): bool => ! $record->trashed()),
            Filament\Tables\Actions\DeleteAction::make(),
            Filament\Tables\Actions\RestoreAction::make(),
            Filament\Tables\Actions\ForceDeleteAction::make()
                ->label('Permanently Delete'),
        ];

        if( $removeActions ) {
            foreach( $removeActions as $action ) {
                switch ( $action ) {
                    case 'edit':
                        unset($actions[0]);
                        break;
                    case 'delete':
                        unset($actions[1]);
                        break;
                    case 'restore':
                        unset($actions[2]);
                        break;
                    case 'forceDelete':
                        unset($actions[3]);
                        break;
                    default:
                        break;
                }
            }
        }

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
    function get_sub_page_layout_data( $routeKey, $routeValue, $cardTitle = '', $mainContentCss = '', $sideNavCss ='' )
    {
        $cardRoute = '';
        if( empty($cardTitle) ) {
            switch($routeValue) {
                case 'cse':
                    $cardTitle = 'Computer Science And Engineering';
                    $cardRoute = 'cse';
                    break;
                case 'eee':
                    $cardTitle = 'Electrical & Electronics Engineering';
                    $cardRoute = 'eee';
                    break;
                case 'ce':
                    $cardTitle = 'Civil Engineering';
                    $cardRoute = 'ce';
                    break;
                default:
                    break;
            }
        }

        return [
            'routeKey' => $routeKey,
            'page' => $routeValue,
            'menu' => $routeKey.'.'.$routeValue,
            'cardTitle' => $cardTitle,
            'mainContentCss' => $mainContentCss,
            'sideNavCss' => $sideNavCss,
            'cardRoute' => $cardRoute,
        ];
    }
}

if( ! function_exists('get_card_class_of_student_staticstics') ) {
    function get_card_class_of_student_staticstics ( $index ) {
        $class = ($index % 2 === 0) ? 'bg-lime-100' : 'bg-white';
        $default = 'shadow-lg rounded-lg p-6 text-center transform hover:scale-105 transition duration-300';
        return "$class $default";
    }
}


if( ! function_exists('get_event_slug') ) {
    function get_event_slug ( $title ) {
        return Str::slug( $title );
    }
}

if( ! function_exists('send_notification') ) {
    function send_notification( $type, $duration, $title ): void
    {
        Notification::make()
            ->$type()
            ->duration($duration)
            ->title($title)
            ->send();
    }
}
