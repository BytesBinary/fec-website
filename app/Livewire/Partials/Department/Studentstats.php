<?php

namespace App\Livewire\Partials\Department;

use Livewire\Component;

class Studentstats extends Component
{
    public $department;
    public function mount($department)
    {
        $this->department = $department;
    }
    public function render()
    {
        return view('livewire.partials.department.studentstats')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department',$this->department));
    }
}
