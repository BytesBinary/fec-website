<?php

namespace App\Livewire\Pages\Clubs;

use Livewire\Component;

class Fecpc extends Component
{
    public $cardTitle ='Photography Club';
    public $club = 'photography';
    public function render()
    {
        return view('livewire.pages.campus-life/club')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('club',$this->club, $this->cardTitle));;
    }
}
