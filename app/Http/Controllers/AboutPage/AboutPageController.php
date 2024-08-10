<?php

namespace App\Http\Controllers\AboutPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function at_a_glance()
    {
        return view('about.at-a-glance');
    }

    public function vision_mission()
    {
        return view('about.vision-mission');
    }

    public function infrastructure()
    {
        return view('about.infrastructure');
    }

    public function message_from_principal()
    {
        return view('about.message-from-principal');
    }
}
