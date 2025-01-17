<?php

namespace App\Livewire\Partials\Home;

use Livewire\Component;
use App\Models\Post;

class ResearchEvents extends Component
{
    public array $events;
    public $researches = [];

    public function render()
    {
        $this->events = Post::where('post_type', 'event')
            ->take(5)
            ->get()
            ->map(function ($data){
                $data->post_content = '';
                $data->event_details = get_post_meta($data->id,'event_details');
                return $data;
            })
            ->toArray();
        return view('livewire.partials.home.research-events');
    }
}
