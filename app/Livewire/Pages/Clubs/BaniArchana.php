<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;
use Livewire\Attributes\Title;

class BaniArchana extends Component
{
    #[Title('FEC | Bani Archana')]
    public $club ='Bani Archana';
    public function render()
    {
        return view('livewire.pages.campus-life/club');
    }
}
