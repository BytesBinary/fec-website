<?php

namespace App\Livewire\Partials\Department;

use Livewire\Component;

class Events extends Component
{
    public $department;
    public function mount($department)
    {
        $this->department = $department;
    }
    public function render()
    {
        return view('livewire.partials.department.events')
            ->layout('components.layouts.sub-page',[
                'department' => $this->department
            ]);
    }
}
