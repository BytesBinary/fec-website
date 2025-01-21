<?php

namespace App\Livewire\Partials\Home;

use App\Models\Post;
use Livewire\Component;

class ResearchEvents extends Component
{
    public array $events;

    public $researches = [];

    public function render()
    {
        $this->events = Post::where('post_type', 'event')
        ->take(4)
        ->get()
        ->map(function ($data) {
            $data->post_content = '';

            $eventDetails = get_post_meta($data->id, 'event_details');

            if (is_array($eventDetails['feature_image'])) {
                $eventDetails['feature_image'] = current($eventDetails['feature_image']);
            }

            $data->event_details = $eventDetails;

            return $data;
        })
        ->toArray();
        return view('livewire.partials.home.research-events',['events'=>$this->events]);
    }
}
