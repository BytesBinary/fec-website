<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;

class Professionals extends Component
{
    Public $card_title='Club of Professionals';
    public $club ='Professionals';
    public function render()
    {
        return view('livewire.pages.campus-life/club')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('club',$this->club, $this->card_title));;
    }
}
