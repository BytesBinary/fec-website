<?php

namespace App\Http\Controllers\AboutPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function at_a_glance()
    {
        return view('pages.about.at-a-glance');
    }

    public function vision_mission()
    {
        return view('pages.about.vision-mission');
    }

    public function infrastructure()
    {
        return view('pages.about.infrastructure');
    }

    public function message_from_principal()
    {
        return view('pages.about.message-from-principal');
    }
}
