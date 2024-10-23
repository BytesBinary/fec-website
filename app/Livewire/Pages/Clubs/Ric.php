<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;

class Ric extends Component
{
    public $club = 'RIC';
    public function render()
    {
        return view('livewire.pages.campus-life/club');
    }
}
