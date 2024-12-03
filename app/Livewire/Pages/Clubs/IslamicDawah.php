<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;

class IslamicDawah extends Component
{
    public $card_title ='Islamic Research And Dawah Center';
    public $club='islamic-dawah';
    public function render()
    {
        return view('livewire.pages.campus-life/club')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('club',$this->club, $this->card_title));;
    }
}
