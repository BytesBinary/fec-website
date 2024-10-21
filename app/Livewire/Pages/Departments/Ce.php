<?php

namespace App\Livewire\Pages\Departments;

use Livewire\Component;

class Ce extends Component
{
    public $department = 'ce';
    public function render()
    {
        return view('livewire.pages.department')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department',$this->department));
    }
}
