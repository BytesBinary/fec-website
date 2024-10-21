<?php

namespace App\Livewire\Pages\Departments;

use Livewire\Component;

class Eee extends Component
{
    public $department = 'eee';
    public function render()
    {
        return view('livewire.pages.department')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department',$this->department));
    }
}
