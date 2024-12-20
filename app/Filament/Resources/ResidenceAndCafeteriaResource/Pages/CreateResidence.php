<?php

namespace App\Filament\Resources\ResidenceAndCafeteriaResource\Pages;

use App\Filament\Resources\ResidenceAndCafeteriaResource;
use App\Models\Post;
use Filament\Actions\Action;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Auth;

class CreateResidence extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = ResidenceAndCafeteriaResource::class;

    protected static string $view = 'filament.manage-residence.create-residence';

    public ?array $data;

    public string $record = '';

    public function mount($record = '')
    {
        $this->record = $record;

        if ($this->record) {
            $post = Post::where('id', $record)->first()->toArray();
            $housing_details = get_post_meta($record, 'housing_details');
            $post['total_room'] = $housing_details['total_room'];
            $post['capacity'] = $housing_details['total_capacity'];
            $post['occupied'] = $housing_details['total_occupied'];
            $post['residence_slogan'] = get_post_meta($record, 'residence_slogan');
            $post['dining_schedule'] = get_post_meta($record, 'dining_schedule');
            $post['facilities'] = get_post_meta($record, 'facilities');
            $post['administration'] = get_post_meta($record, 'administration');
            $post['map_url'] = get_post_meta($record, 'map_url');
            $this->form->fill($post);
        }
    }

    public function updateResidence()
    {
        // Update post
        Post::where('id', $this->record)
            ->update([
                'post_title' => $this->data['post_title'],
                'post_content' => $this->data['post_content'],
            ]);
        // create the housing details post meta
        create_or_update_post_meta($this->record, 'housing_details',
            [
                'total_room' => $this->data['total_room'],
                'total_capacity' => $this->data['capacity'],
                'total_occupied' => $this->data['occupied'],
            ]);
        // create the post meta for residence_slogan
        create_or_update_post_meta($this->record, 'residence_slogan', $this->data['residence_slogan'] ?? []);
        // create the post meta for dining schedule
        create_or_update_post_meta($this->record, 'dining_schedule', $this->data['dining_schedule'] ?? []);
        // create the post meta for facilities
        create_or_update_post_meta($this->record, 'facilities', $this->data['facilities'] ?? []);
        // create the post meta for administration
        create_or_update_post_meta($this->record, 'administration', $this->data['administration'] ?? []);
        // creat the post meta for map url
        create_or_update_post_meta($this->record, 'map_url', $this->data['map_url'] ?? []);

        send_notification('success', 5000, 'Residence Updated Successfully.');

        return redirect(ResidenceAndCafeteriaResource::getUrl('index'));
    }

    public function createResidence()
    {
        $this->validate();
        $post = Post::create([
            'post_title' => $this->data['post_title'],
            'post_type' => 'residence',
            'post_status' => 'publish',
            'post_category' => 'residence',
            'post_author' => Auth::user()->id,
            'post_slug' => create_unique_post_slug($this->data['post_title']),
            'post_content' => $this->data['post_content'],
        ]);
        // create the housing details post meta
        create_or_update_post_meta($post, 'housing_details',
            [
                'total_room' => $this->data['total_room'],
                'total_capacity' => $this->data['capacity'],
                'total_occupied' => $this->data['occupied'],
            ]);
        // create the post meta for residence_slogan
        create_or_update_post_meta($post, 'residence_slogan', $this->data['residence_slogan'] ?? []);
        // create the post meta for dining schedule
        create_or_update_post_meta($post, 'dining_schedule', $this->data['dining_schedule'] ?? []);
        // create the post meta for facilities
        create_or_update_post_meta($post, 'facilities', $this->data['facilities'] ?? []);
        // create the post meta for administration
        create_or_update_post_meta($post, 'administration', $this->data['administration'] ?? []);
        // creat the post meta for map url
        create_or_update_post_meta($post, 'map_url', $this->data['map_url'] ?? []);

        send_notification('success', 5000, 'Residence Created Successfully.');

        return redirect(ResidenceAndCafeteriaResource::getUrl('index'));
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                // Basic Details Section
                Section::make('Basic Details')
                    ->description('Add the basic Details')
                    ->schema([
                        TextInput::make('post_title')
                            ->placeholder('e.g. North Hall')
                            ->label('Enter the title here')
                            ->required(),
                        TextInput::make('residence_slogan')
                            ->placeholder('e.g. Improvise your knowledge')
                            ->label('Enter a short sentence about Residence')
                            ->required(),
                        TextInput::make('map_url')
                            ->label('Map URL')
                            ->url()
                            ->placeholder('e.g. https://maps.google.com')
                            ->required(),
                        Textarea::make('post_content')
                            ->label('Write about the residence : ')
                            ->placeholder('Start writing here')
                            ->rows(10)
                            ->required(),
                    ])
                    ->columns(2),

                // Housing Details Section
                Section::make('Housing Details')
                    ->description('Add the details about housing')
                    ->schema([
                        TextInput::make('total_room')
                            ->label('Enter the total number of room')
                            ->placeholder('e.g. 100')
                            ->numeric()
                            ->required(),
                        TextInput::make('capacity')
                            ->placeholder('e.g. 400')
                            ->label('Enter the maximum capacity of the residence')
                            ->numeric()
                            ->required(),
                        TextInput::make('occupied')
                            ->placeholder('e.g. 390')
                            ->label('Enter the occupied seats in')
                            ->numeric()
                            ->required(),
                    ])
                    ->columns(3),

                // Dining Schedule
                Section::make('Dining Schedule')
                    ->description('Add dining time and foods')
                    ->schema([
                        Repeater::make('dining_schedule')
                            ->label('Dining')
                            ->schema([
                                TextInput::make('meal_title')
                                    ->placeholder('Morning meal/ Breakfast/ Lunch')
                                    ->label('Enter the title of the meal')
                                    ->required(),
                                TimePicker::make('meal_start_time')
                                    ->label('Meal start time')
                                    ->required(),
                                TimePicker::make('meal_end_time')
                                    ->label('Meal end time')
                                    ->required(),
                                TextInput::make('food_details')
                                    ->placeholder('Meat, Curry, Vegetables')
                                    ->label('Food details of the meal')
                                    ->required(),
                            ])->columns(2),
                    ]),

                // Facilities Section
                Section::make('Facilities')
                    ->description('Enter the facilities of the residence')
                    ->schema([
                        Repeater::make('facilities')
                            ->schema([
                                TextInput::make('title')
                                    ->placeholder('e.g. State-of-the-Art Kitchen')
                                    ->label('Enter the title')
                                    ->required(),
                                Textarea::make('simple description')
                                    ->placeholder('e.g. Equipped with modern appliances and managed by professional cooks to ensure quality.')
                                    ->label('Simple description about the facilities')
                                    ->required(),
                            ])->columns(2),
                    ]),

                // Administration Section
                Section::make('Administration')
                    ->description('Add administration details of the residence')
                    ->schema([
                        Repeater::make('administration')
                            ->schema([
                                TextInput::make('name')
                                    ->placeholder('e.g. Name')
                                    ->label('Enter his/her name')
                                    ->required(),
                                TextInput::make('position')
                                    ->placeholder('Hall Accountant')
                                    ->label('Enter the position')
                                    ->required(),
                                TextInput::make('email')
                                    ->placeholder('e.g. hello@examople.com')
                                    ->label('Enter the email')
                                    ->required(),
                                TextInput::make('phone_number')
                                    ->placeholder('e.g. 01XXXXXXX')
                                    ->label('Enter the mobile number')
                                    ->required(),
                            ])->columns(2),
                    ]),
            ])
            ->statePath('data');
    }

    public function getFormActions($action = 'save'): array
    {
        $actions = [
            'save' => [
                Action::make('Save')
                    ->label('Save Residence')
                    ->action('createResidence'),
            ],
            'update' => [
                Action::make('Update')
                    ->label('Update Residence')
                    ->action('updateResidence'),
            ],
        ];

        return $actions[$action];
    }
}
