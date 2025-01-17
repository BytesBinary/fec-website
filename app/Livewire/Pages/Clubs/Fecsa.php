<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;
use Livewire\Attributes\Title;
class Fecsa extends Component
{
    #[Title('FEC | Sports Association')]
    public $club='fecsa';
    public function render()
    {
        return view('livewire.pages.campus-life/club');
    }
}
