<?php

namespace App\Livewire\Partials\Department;

use Livewire\Component;

class About extends Component
{
    public $department;
    public function mount($department)
    {
        $this->department = $department;
    }
    public function render()
    {
        return view('livewire.partials.department.about')
            ->layout('components.layouts.sub-page',[
                'department' => $this->department
            ]);
    }
}
