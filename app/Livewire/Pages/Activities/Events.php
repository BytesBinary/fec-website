<?php

namespace App\Livewire\Pages\Activities;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;

class Events extends Component
{
    #[Title('Upcoming Events')]

    public array $events;
    public function mount()
    {
        $this->events = Post::where('post_type', 'event')
            ->get()
            ->map(function ($data){
                $data->post_content = '';
                $data->event_details = get_post_meta($data->id,'event_details');
                return $data;
            })
            ->toArray();
    }
    public function render()
    {
        return view('livewire.pages.activities.events');
    }
}
