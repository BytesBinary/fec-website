<?php

namespace App\Livewire\Pages\Departments;

use Livewire\Component;
use Livewire\Attributes\Title;

class Ce extends Component
{
    public $department = 'ce';
    public $cardTitle = 'Civil Engineering';
    #[Title('Civil Engineering')]
    public function render()
    {
        return view('livewire.pages.department')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department',$this->department),$this->cardTitle);
    }
}
