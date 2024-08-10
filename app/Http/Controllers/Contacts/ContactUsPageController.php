<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsPageController extends Controller
{
    public function load_page()
    {
        return view('contact-us');
    }
}
