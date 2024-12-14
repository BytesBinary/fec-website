<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearchRoute extends Controller
{
    public function __invoke(Request $request, $research)
    {
        $researches = [
            'demo' => \App\Livewire\Pages\Activities\Demo::class,
        ];

        if( ! array_key_exists($research, $researches) ) {
            abort(404);
        }

        return app()->call($researches[$research]);
    }
}

