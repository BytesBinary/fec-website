<?php

namespace App\Http\Controllers\AboutPage;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function at_a_glance()
    {
        $section = PageMetas::where('meta_key', 'at_a_glance')->first();
        if( $section ) {
            $section = json_decode($section->meta_value);
        }
        return view('pages.at-a-glance', compact('section'));
    }

    public function vision_mission()
    {
        return view('pages.vision-mission');
    }

    public function infrastructure()
    {
        return view('pages.infrastructure');
    }

    public function message_from_principal()
    {
        return view('pages.message-from-principal');
    }
}
