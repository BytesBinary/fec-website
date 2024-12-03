<?php

namespace App\Livewire\Partials\Club;

use Livewire\Component;

class Committee extends Component
{
    public $club;

    public function mount( $club = '' )
    {
        if( empty($club) ) {
            $this->redirect(route('clubs'));
        }
        $this->club = $club;
    }

    public function render()
    {
        return view('livewire.partials.club.committee')
        ->layout('components.layouts.sub-page', get_sub_page_layout_data('club',$this->club));

    }
}
