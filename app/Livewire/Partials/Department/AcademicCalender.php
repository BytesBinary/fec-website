<?php

namespace App\Livewire\Partials\Department;

use Livewire\Component;

class AcademicCalender extends Component
{
    public $department;
    public function mount($department)
    {
        $this->department = $department;
    }
    public function render()
    {
        return view('livewire.partials.department.academic-calender')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department',$this->department));
    }
}
