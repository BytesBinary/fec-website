<?php

namespace App\Livewire\Pages\Activities;

use Livewire\Component;
use Livewire\Attributes\Title;

class Publications extends Component
{
    #[Title('Publications')]
    
    public function render()
    {
        return view('livewire.pages.activities.publications');
    }
}
