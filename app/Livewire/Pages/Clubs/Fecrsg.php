<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;
use Livewire\Attributes\Title;

class Fecrsg extends Component
{
    #[Title('FEC | Rover Scout')]
    public $club ='Rover Scout';
    public function render()
    {
        return view('livewire.pages.campus-life/club');
    }
}
