<?php

namespace App\Livewire\Pages\Activities;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

class Events extends Component
{
    #[Title('Upcoming Events')]
    public array $events;

    public function mount()
    {
        $this->events = Post::where('post_type', 'event')
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
    }

    public function render()
    {
        return view('livewire.pages.activities.events');
    }
}
