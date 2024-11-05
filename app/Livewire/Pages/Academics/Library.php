<?php

namespace App\Livewire\Pages\Academics;

use Livewire\Attributes\Title;
use Livewire\Component;

class Library extends Component
{
    #[Title('Library')]
    
    public function render()
    {
        return view('livewire.pages.academics.library');
    }
}
