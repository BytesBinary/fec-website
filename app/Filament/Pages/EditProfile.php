<?php

namespace App\Filament\Pages;

use App\Models\Department;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Livewire\WithFileUploads;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class EditProfile extends Page implements HasForms
{
    use InteractsWithForms;
    use WithFileUploads;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationLabel = 'Edit Profile';

    protected static string $view = 'filament.pages.edit-profile';

    public ?array $defaultDetailsData = [];
    public string $designation;

    public function mount()
    {
        $this->designation = auth()->user()->designation;
    }

    public function getForms() : array
    {
        return [
            'defaultDetails',
            'changePasswordForm',
        ];
    }

    public function defaultDetails(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Personal Information')
                    ->columns(2)
                    ->schema([
                        FileUpload::make('profile_picture')
                            ->label('Profile Picture')
                            ->placeholder('Upload your profile picture')
                            ->image()
                            ->imageCropAspectRatio('1:1')
                            ->maxSize(1048),
                        TextInput::make('username')
                            ->label('Name')
                            ->placeholder('John Doe')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email')
                            ->placeholder('Enter your email')
                            ->required(),
                        TextInput::make('short_name')
                            ->label('Short Name')
                            ->placeholder('JD')
                            ->required(auth()->user()->designation === 'Teacher')
                            ->unique('users', 'short_name', ignoreRecord:true),
                        Select::make('department')
                            ->options(Department::pluck('short_title', 'short_title')->toArray()),
                        TinyEditor::make('bio')
                            ->profile('event')
                            ->columnSpanFull()
                            ->minHeight(300)
                            ->label('Bio'),
                     ]),
            ])->statePath('defaultDetailsData');
    }

    public function changePasswordForm(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('current_password')
                    ->label('Current Password')
                    ->placeholder('Enter your current password')
                    ->required()
                    ->statePath('current_password'),
                TextInput::make('new_password')
                    ->label('New Password')
                    ->placeholder('Enter your new password')
                    ->required()
                    ->statePath('new_password'),
                TextInput::make('confirm_password')
                    ->label('Confirm Password')
                    ->placeholder('Confirm your new password')
                    ->required()
                    ->statePath('confirm_password'),
            ]);
    }

    public function getFormActions( $action = "save" ) : array
    {
        $actions = [
            'updateDefaultDetails' => [
                Action::make('update_details')
                    ->label('Update Details')
                    ->action('updateDefaultDetails')
            ],
        ];
        return $actions[$action];
    }
}
