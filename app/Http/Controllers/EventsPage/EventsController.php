<?php

namespace App\Http\Controllers\EventsPage;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function load_page()
    {
        $events = Post::where('type', 'event')->get();
        return view('pages.activities.events', compact('events'));
    }
}
