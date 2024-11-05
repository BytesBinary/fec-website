<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;
class Alumni extends Component
{
    #[Title('Alumni')]
    
    public function render()
    {
        return view('livewire.pages.alumni');
    }
}
