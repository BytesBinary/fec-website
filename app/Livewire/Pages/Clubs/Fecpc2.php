<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;
use Livewire\Attributes\Title;

class Fecpc2 extends Component
{
    #[Title('FEC | Programming Club')]
    public $club ='programming';
    public function render()
    {
        return view('livewire.pages.campus-life/club');
    }
}
