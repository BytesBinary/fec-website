<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;
use Livewire\Attributes\Title;
class Debating extends Component
{
    #[Title('FEC | Debating Club')]
    public $club='Debating';
    public function render()
    {
        return view('livewire.pages.campus-life/club');
    }
}
