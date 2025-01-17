<?php

namespace App\Livewire\Pages\Administration;

use Livewire\Component;
use Livewire\Attributes\Title;


class Principal extends Component
{
    #[Title('FEC | Principal')]
    public function render()
    {
        return view('livewire.pages.administration.principal');
    }
}
