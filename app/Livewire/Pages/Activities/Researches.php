<?php

namespace App\Livewire\Pages\Activities;

use Livewire\Component;
use Livewire\Attributes\Title;

class Researches extends Component
{
    #[Title('Researches')]
    
    public function render()
    {
        return view('livewire.pages.activities.researches');
    }
}
