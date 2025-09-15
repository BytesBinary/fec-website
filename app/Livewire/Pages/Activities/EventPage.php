<?php
namespace App\Livewire\Pages\Activities;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class EventPage extends Component
{
    public array $event;

    public function redirectTo($url)
    {
        return redirect()->to($url);
    }

    public function render()
    {
        $slug = request()->route('slug');

        $eventData = Post::where('post_slug', $slug)
            ->where('post_type', 'event')
            ->get()
            ->map(function ($data) {
                $segments = get_post_meta($data->id, 'event_segments');
                $data->event_details = get_post_meta($data->id, 'event_details');
                $data->event_segments = ! empty($segments) ? current($segments) : [];
                $data->contact_details = get_post_meta($data->id, 'contact_details');
                $data->post_author = User::where('id', $data->post_author)->first()->name;

                return $data;
            })
            ->toArray();

            if (! empty($eventData)) {
                $this->event = current($eventData);
            } else {
                return redirect()->route('events');
            }
        return view('livewire.pages.activities.event-page', ['event' => $this->event])
            ->layout('components.layouts.app', ['title' => $this->event['post_title']]);
    }
}
