<?php

namespace App\Livewire\Pages\Departments;

use Livewire\Component;

class Cse extends Component
{
    public $department = 'cse';
    public function render()
    {
        return view('livewire.pages.department')
            ->layout('components.layouts.sub-page', [
                'department' => $this->department,
            ]);
    }
}
