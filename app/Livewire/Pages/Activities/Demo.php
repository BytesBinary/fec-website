<?php

namespace App\Livewire\Pages\Activities;

use Livewire\Component;

class Demo extends Component
{
    public $club ='demo';
    public function render()
    {
        return view('livewire.pages.activities/researches');
    }
}
