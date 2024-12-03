<?php

namespace App\Livewire\Pages\Activities;

use App\Models\Post;
use Livewire\Component;

class EventPage extends Component
{
    public array $event;
    public function mount($name)
    {
        $this->event = Post::where('post_slug', $name)
            ->where('post_type', 'event')
            ->get()
            ->map(function ($data){
                $data->event_details = get_post_meta($data->id,'even_details');
                $data->event_segments = get_post_meta($data->id,'event_segments');
                $data->contact_details = get_post_meta($data->id,'contact_details');
                return $data;
            })
            ->toArray();
        if( ! empty( $this->event ) ) {
            $this->event = current($this->event);
        } else {
            return redirect()->route('residence-cafeteria');
        }
    }

    public function render()
    {
        return view('livewire.pages.activities.event-page');
    }
}
