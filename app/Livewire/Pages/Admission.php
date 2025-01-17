<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class Admission extends Component
{
    #[Title('FEC | Admission')]
    public function render()
    {
        return view('livewire.pages.admission');
    }
}
