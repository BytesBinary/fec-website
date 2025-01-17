<?php

namespace App\Livewire\Pages\Academics;

use Livewire\Component;
use Livewire\Attributes\Title;


class Library extends Component
{
    #[Title('FEC | Library')]
    public function render()
    {
        return view('livewire.pages.academics.library');
    }
}
