<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;

class Feccpc extends Component
{
    public $card_title='Cyber Protector Club';
    public $club='cyber-protector';
    public function render()
    {
        return view('livewire.pages.campus-life/club')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('club',$this->club, $this->card_title));;
    }
}
