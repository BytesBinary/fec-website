<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function principal()
    {
        return view('principal');
    }
}
