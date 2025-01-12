<?php

namespace App\Filament\Resources\ManageAccessResource\Pages;

use App\Filament\Resources\ManageAccessResource;
use App\Models\Designation;
use App\Models\ResourceHasAccess;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;

class CreateAccessPage extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = ManageAccessResource::class;

    public $resource_class;

    public $role_ids;

    protected static string $view = 'filament.manage-resource-access.create-access-page';

    private $resources;

    private $record;

    public function mount($record = null)
    {
        $this->record = $record;
        if ($this->record !== null) {
            $this->filForm();
        }
        $beforeModifiedResources = Filament::getResources();
        foreach ($beforeModifiedResources as $resource) {
            $this->resources[$resource] = class_basename($resource);
        }
    }

    public function filForm()
    {
        $data = ResourceHasAccess::find($this->record);
        $role_ids = (is_array($data->role_ids)) ? $data->role_ids : json_decode($data->role_ids, true);
        $this->form->fill([
            'resource_class' => $data->resource_class,
            'role_ids' => $role_ids,
        ]);
    }

    public function createOrUpdate()
    {
        $this->validate();

        $this->role_ids = json_encode($this->role_ids);

        $is_update = ResourceHasAccess::updateOrCreate([
            'resource_class' => $this->resource_class,
        ], [
            'role_ids' => $this->role_ids,
        ]);

        if ($is_update) {
            send_notification('success', 5000, 'Access updated successfully');
        } else {
            send_notification('danger', 5000, 'Access updated successfully');
        }
    }

    public function form(Form $form): Form
    {
        return $form
            ->columns(2)
            ->schema([
                Select::make('resource_class')
                    ->label('Resource')
                    ->options($this->resources)
                    ->required()
                    ->searchable()
                    ->statePath('resource_class'),
                Select::make('role_ids')
                    ->label('Roles')
                    ->options(Designation::all()->pluck('designation', 'id'))
                    ->multiple()
                    ->required()
                    ->searchable()
                    ->statePath('role_ids'),
            ]);
    }

    public function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Details')
                ->submit('createOrUpdate'),
        ];
    }
}
