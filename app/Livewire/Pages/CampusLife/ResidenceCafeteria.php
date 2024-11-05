<?php

namespace App\Livewire\Pages\CampusLife;

use Livewire\Component;
use Livewire\Attributes\Title;

class ResidenceCafeteria extends Component
{
    #[Title('Residence & Cafeteria')]
    public function render()
    {
        return view('livewire.pages.campus-life.residence-cafeteria');
    }
}
