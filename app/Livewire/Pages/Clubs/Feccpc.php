<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;
use Livewire\Attributes\Title;

class Feccpc extends Component
{
    #[Title('FEC | Cyber Protector Club')]
    public $club='protector club';
    public function render()
    {
        return view('livewire.pages.campus-life/club');
    }
}
