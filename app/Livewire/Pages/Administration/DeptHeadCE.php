<?php

namespace App\Livewire\Pages\Administration;

use Livewire\Component;
use Livewire\Attributes\Title;


class DeptHeadCE extends Component
{
    #[Title('Department Head of CE')]
    public function render()
    {
        return view('livewire.pages.administration.dept-head-c-e');
    }
}
