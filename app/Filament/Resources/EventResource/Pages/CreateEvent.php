<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use App\Models\Post;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Auth;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class CreateEvent extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = EventResource::class;

    protected static string $view = 'filament.manage-events.create-event';

    public ?array $basic_details = [];
    public string $event_description = '';
    public ?array $segments = [];
    public ?array $contact_details = [];
    public ?array $event = [];

    public string $record;

    public function createEvent()
    {
        $this->validate();

        $eventDate = \Carbon\Carbon::parse($this->basic_details['event_date'])->format('Y-m-d');

        if ($this->basic_details['feature_image']) {
            $imagePath = "event/{$eventDate}/hello.png";

            $uploadedFile = $this->basic_details['feature_image'];
            $savedPath = $uploadedFile->storeAs('public', $imagePath);

            $this->basic_details['feature_image'] = str_replace('public/', '', $savedPath);
        }

        $event = Post::create([
            'post_title' => $this->basic_details['post_title'],
            'post_type' => 'event',
            'post_category' => 'global',
            'post_content' => $this->event_description,
            'post_author' => Auth::user()->id,
            'post_slug' => create_unique_post_slug($this->basic_details['post_title']),
            'post_status' => 'publish',
        ]);

        create_or_update_post_meta($event, 'event_details', [
            'short_description' => $this->basic_details['short_description'],
            'registration_url' => $this->basic_details['registration_url'],
            'event_date' => $this->basic_details['event_date'],
            'event_location' => $this->basic_details['event_location'],
            'feature_image' => $this->basic_details['feature_image'],
        ]);
        create_or_update_post_meta($event, 'event_segments', $this->segments);
        create_or_update_post_meta($event, 'contact_details', $this->contact_details);
    }

    public function form(Form $form) : Form
    {
        return $form
            ->schema([
               Section::make('Basic Details')
                    ->columns(2)
                    ->schema([
                        TextInput::make('post_title')
                            ->label('Title')
                            ->required()
                            ->placeholder('Enter the title of the event'),
                        TextInput::make('short_description')
                            ->label('Short Description')
                            ->required()
                            ->hint('Try to keep it under 5 word or 40 characters')
                            ->hintColor('danger')
                            ->placeholder('Enter a short description of the event'),
                        TextInput::make('registration_url')
                            ->label('Registration URL')
                            ->url()
                            ->placeholder('Enter the registration URL'),
                        DateTimePicker::make('event_date')
                            ->label('Event Date')
                            ->required()
                            ->placeholder('Select the date of the event'),
                        TextInput::make('event_location')
                            ->label('Event Location')
                            ->hint('You can use map url or text')
                            ->hintColor('danger')
                            ->placeholder('Event Location')
                            ->required(),
                        FileUpload::make('feature_image')
                            ->label('Feature Image')
                            ->image()
                            ->required()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('16:9')
                            ->placeholder('Upload the feature image of the event'),
                    ])->statePath('basic_details'),
                Section::make('Description')
                    ->label('Event Description')
                    ->schema([
                        TinyEditor::make('event_description')
                            ->profile('event')
                            ->minHeight(500)
                            ->label('Description')
                            ->statePath('event_description')
                            ->required(),
                    ]),
                Section::make('Segments')
                    ->label('Event Segments')
                    ->columns(1)
                    ->schema([
                       Repeater::make('segments')
                            ->schema([
                                TextInput::make('segment_title')
                                    ->label('Segment Title')
                                    ->required()
                                    ->placeholder('Enter the title of the segment'),
                                Textarea::make('segment_description')
                                    ->label('Segment Description')
                                    ->required()
                                    ->placeholder('Enter the description of the segment'),
                            ]),
                    ])->statePath('segments'),
                Section::make('Contact Details')
                    ->label('Contact Details')
                    ->schema([
                        Repeater::make('contact_details')
                            ->columns(2)
                            ->schema([
                                TextInput::make('contact_name')
                                    ->label('Contact Name')
                                    ->required()
                                    ->placeholder('Enter the name of the contact person'),
                                TextInput::make('designation')
                                    ->label('Designation')
                                    ->required()
                                    ->placeholder('Enter the designation of the contact person'),
                                TextInput::make('contact_email')
                                    ->label('Contact Email')
                                    ->email()
                                    ->required()
                                    ->placeholder('Enter the email of the contact person'),
                                TextInput::make('contact_phone')
                                    ->label('Contact Phone')
                                    ->tel()
                                    ->required()
                                    ->placeholder('Enter the phone number of the contact person'),
                            ])->statePath('contact_details')
                    ])
            ]);
    }

    public function getFormActions( $action = "save" ) : array
    {
        $actions = [
            'save' => [
                Action::make('Save')
                    ->label('Save Event')
                    ->action('createEvent')
            ],
            'update' => [
                Action::make('Update')
                    ->label('Update Event')
                    ->action('updateEvent')
            ]
        ];
        return $actions[$action];
    }
}
