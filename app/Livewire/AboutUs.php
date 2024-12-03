<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class AboutUs extends Component
{
    #[Title('About US | FEC')]
    public function render()
    {
        return view('livewire.about-us');
    }
}
