<?php

namespace App\Livewire\Pages\Departments;

use Livewire\Component;
use Livewire\Attributes\Title;

class NonTech extends Component
{
    public $department = 'non-tech';
    public $cardTitle = 'Non-Tech';
    #[Title('Non-Tech')]
    public function render()
    {
        return view('livewire.pages.department')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department',$this->department),$this->cardTitle);
    }
}
