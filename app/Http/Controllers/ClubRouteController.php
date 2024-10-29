<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\Livewire;

class ClubRouteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $club)
    {
        $clubs = [
            'ric' => \App\Livewire\Pages\Clubs\Ric::class,
            'fecsa' => \App\Livewire\Pages\Clubs\Fecsa::class,
            'feccpc' => \App\Livewire\Pages\Clubs\Feccpc::class,
            'fecpc' => \App\Livewire\Pages\Clubs\Fecpc::class,
            'fecpc2' => \App\Livewire\Pages\Clubs\Fecpc2::class,
            'debating' => \App\Livewire\Pages\Clubs\Debating::class,
            'islamic-dawah' => \App\Livewire\Pages\Clubs\IslamicDawah::class,
            'bani-archana' => \App\Livewire\Pages\Clubs\BaniArchana::class,
            'professionals' => \App\Livewire\Pages\Clubs\Professionals::class,
            'fecrsg' => \App\Livewire\Pages\Clubs\Fecrsg::class,
        ];

        if( ! array_key_exists($club, $clubs) ) {
            abort(404);
        }

        return app()->call($clubs[$club]);
    }
}
