<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;
use Livewire\Attributes\Title;
class Fecpc extends Component
{
    #[Title('FEC | Photography Club')]
    public $club = 'photography';
    public function render()
    {
        return view('livewire.pages.campus-life/club');
    }
}
