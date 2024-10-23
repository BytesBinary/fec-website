<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;

class Fecpc extends Component
{
    public $club = 'photography';
    public function render()
    {
        return view('livewire.pages.campus-life/club');
    }
}
