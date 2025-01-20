<?php

namespace App\Livewire\Pages\Activities;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Events extends Component
{
    use WithPagination;

    #[Title('Upcoming Events')]
    public function render()
    {
        $events = Post::where('post_type', 'event')
            ->paginate(4)
            ->through(function ($data) {
                $data->post_content = '';

                $eventDetails = get_post_meta($data->id, 'event_details');

                if (is_array($eventDetails['feature_image'])) {
                    $eventDetails['feature_image'] = empty(current($eventDetails['feature_image'])) ? '' : current($eventDetails['feature_image']);
                }

                $data->event_details = $eventDetails;

                return $data;
            });

        return view('livewire.pages.activities.events', [
            'events' => $events, // Pass the paginated data directly to the view
        ]);
    }
}
