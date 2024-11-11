<?php

namespace App\Livewire\Pages\CampusLife;

use Livewire\Component;
use Livewire\Attributes\Title;

class AllClubs extends Component
{
    #[Title('Clubs')]
    
    public function render()
    {
        return view('livewire.pages.campus-life.all-clubs');
    }
}
