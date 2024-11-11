<?php

namespace App\Livewire\Pages\Administration;

use Livewire\Component;
use Livewire\Attributes\Title;

class DeptHeadCSE extends Component
{
    #[Title('Department Head of CSE')]
    public function render()
    {
        return view('livewire.pages.administration.dept-head-c-s-e');
    }
}
