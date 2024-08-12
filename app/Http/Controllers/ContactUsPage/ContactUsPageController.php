<?php

namespace App\Http\Controllers\ContactUsPage;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;

class ContactUsPageController extends Controller
{
    public function load_page()
    {
        $page = get_page_details('contactus');
        $contact_details = json_decode( PageMetas::where('page_id', $page['id'])->where('meta_key', 'contact_details')->first()->meta_value, true);
        return view('contact-us', array(
            'page' => $page,
            'contact_details' => $contact_details
        ));
    }
}
