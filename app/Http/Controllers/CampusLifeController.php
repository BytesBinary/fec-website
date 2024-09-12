<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusLifeController extends Controller
{
    public function discoverFec()
    {
        return view('discover-fec');
    }
    public function clubs()
    {
        return view('clubs');
    }
}
