<?php

namespace App\Livewire\Partials\Department;

use Livewire\Component;

class SemesterRoutine extends Component
{
    public $department;

    public function render()
    {
        $this->department = request()->route('department');
        return view('livewire.partials.department.semester-routine')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department',$this->department));
    }
}
