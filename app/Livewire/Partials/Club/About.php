<?php

namespace App\Livewire\Partials\Club;

use Livewire\Component;

class About extends Component
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
        return view('livewire.partials.club.about');
    }
}
