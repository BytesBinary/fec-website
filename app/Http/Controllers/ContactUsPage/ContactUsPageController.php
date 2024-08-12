<?php

namespace App\Http\Controllers\ContactUsPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsPageController extends Controller
{
    public function load_page()
    {
        $page = get_page_details('contactus');
        return view('contact-us', array(
            'page' => $page
        ));
    }
}
