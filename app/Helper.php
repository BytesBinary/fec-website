<?php

use App\Models\Post;
use App\Models\PostMeta;
use Filament\Notifications\Notification;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

if( ! function_exists('create_model_tabs') ) {
    function create_model_tabs( Model $model, array $attributes = [], string $modelName = '', array $customCount = [] ) : array
    {
        $default = array(
            'all' => empty($modelName) ? get_readable_classname($model) : $modelName,
            'archived' => 'Trash',
        );
        $attributes = array_merge($default, $attributes);
        $tabs = [];
        foreach( $attributes as $attribute => $value ) {
            switch ( $attribute ) {
                case 'all':
                    $tabs[$attribute] = Tab::make($value)->badge((!empty($customCount) ? $customCount['all'] : $model::count()));
                    break;
                case 'archived':
                    $tabs[$attribute] = Tab::make($value)
                        ->badge((!empty($customCount) ? $customCount['archived'] : $model::onlyTrashed()->count()))
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

        if( ! empty($removeActions) ) {
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
    function create_table_bulk_actions( $extraBulkActions = [], $extraActions = [], $removeActions = [] ) : array
    {
        $bulkActions = [
            Filament\Tables\Actions\DeleteBulkAction::make(),
            Filament\Tables\Actions\RestoreBulkAction::make(),
            Filament\Tables\Actions\ForceDeleteBulkAction::make()
                ->label("Permanently Delete"),
        ];
        if( ! empty($removeActions) ) {
            foreach( $removeActions as $action ) {
                switch ( $action ) {
                    case 'delete':
                        unset($bulkActions[0]);
                        break;
                    case 'restore':
                        unset($bulkActions[1]);
                        break;
                    case 'forceDelete':
                        unset($bulkActions[2]);
                        break;
                    default:
                        break;
                }
            }
        }
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
    function get_card_class_of_student_staticstics ( $index ): string
    {
        $class = ($index % 2 === 0) ? 'bg-lime-100' : 'bg-white';
        $default = 'shadow-lg rounded-lg p-6 text-center transform hover:scale-105 transition duration-300';
        return "$class $default";
    }
}

if( ! function_exists( 'create_unique_post_slug' ) ) {
    function create_unique_post_slug( string $slug ): string
    {
        $slug = Str::slug($slug);
        $count = Post::where('post_slug', $slug)->count();
        if( $count > 0 ) {
            $slug = $slug . '-' . $count;
        }
        return $slug;
    }
}

if( ! function_exists('create_or_update_post_meta') ) {
    function create_or_update_post_meta( $post_id, $meta_key, $meta_value )
    {
        if( is_array($post_id) ) {
            $post_id = $post_id['id'];
        }
        if( is_object($post_id) ) {
            $post_id = $post_id->id;
        }
        $meta = PostMeta::where('post_id', $post_id)
            ->where('meta_key', $meta_key)
            ->first();

        if( is_array($meta_value) ) {
            $meta_value = json_encode($meta_value, true);
        }

        if( $meta ) {
            return $meta->update(['meta_value' => $meta_value]);
        } else {
            return PostMeta::create([
                'post_id' => $post_id,
                'meta_key' => $meta_key,
                'meta_value' => $meta_value,
            ]);
        }
    }
}

if( ! function_exists( 'get_post_meta' ) ) {
    function get_post_meta( $post_id, $meta_key ) {
        $meta = PostMeta::where('post_id', $post_id)
            ->where('meta_key', $meta_key)
            ->first();
        if( $meta ) {
            $decoded = json_decode($meta->meta_value, true);
            if( json_last_error() === JSON_ERROR_NONE ) {
                return $decoded;
            }
            return $meta->meta_value;
        }
        return null;
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
