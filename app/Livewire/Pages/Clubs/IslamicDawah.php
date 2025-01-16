<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;
use Livewire\Attributes\Title;


class IslamicDawah extends Component
{
    #[Title('FEC | Islamic Dawah And Research')]
    public $club ='Islamic Dawah And Research';
    public function render()
    {
        return view('livewire.pages.campus-life/club');
    }
}
