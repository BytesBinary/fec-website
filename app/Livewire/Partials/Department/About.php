<?php

namespace App\Livewire\Partials\Department;

use Illuminate\Support\Str;
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
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department',$this->department, 'About - '. Str::upper($this->department)));
    }
}
