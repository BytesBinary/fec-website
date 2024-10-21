<?php

namespace App\Livewire\Pages\Departments;

use Livewire\Attributes\Title;
use Livewire\Component;

class Eee extends Component
{
    public $department = 'eee';
    #[Title('Electrical and Electronic Engineering')]
    public function render()
    {
        return view('livewire.pages.department')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department',$this->department));
    }
}
