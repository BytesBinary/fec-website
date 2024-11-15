<?php

namespace App\Livewire\Pages\Activities;

use Livewire\Component;

class EventPage extends Component
{
    public string $slug;
    public function mount($slug){
        $this->slug = $slug;
        
    }

    public function render()
    {
        return view('livewire.pages.activities.event-page');
    }
}
