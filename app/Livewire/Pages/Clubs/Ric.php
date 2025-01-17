<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;
use Livewire\Attributes\Title;


class Ric extends Component
{
    #[Title("FEC | RIC")]
    public $club = 'RIC';
    public function render()
    {
        return view('livewire.pages.campus-life/club');
    }
}
