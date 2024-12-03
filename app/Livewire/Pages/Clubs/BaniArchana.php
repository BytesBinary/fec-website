<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;

class BaniArchana extends Component
{
    public $card_title ='Bani Archana';
    public $club = 'bani-archana';

    public function render()
    {
        return view('livewire.pages.campus-life/club')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('club',$this->club, $this->card_title));;
    }
}
