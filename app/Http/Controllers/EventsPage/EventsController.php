<?php

namespace App\Http\Controllers\EventsPage;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function load_page()
    {
        $events = Post::where('type', 'event')
            ->orderBy('date', 'DESC')
            ->get();

        return view('pages.home.events', compact('events'));
    }

    public function view_event( $slug )
    {
        $event = Post::where('slug', $slug)
            ->first();

        return view('pages.event.view', compact('event'));
    }
}
