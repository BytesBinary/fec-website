<?php

namespace App\Livewire\Pages\Activities;

use Livewire\Component;
use Livewire\Attributes\Title;

class Events extends Component
{
    #[Title('Events')]
    public function render()
    {
        return view('livewire.pages.activities.events');
    }
}
