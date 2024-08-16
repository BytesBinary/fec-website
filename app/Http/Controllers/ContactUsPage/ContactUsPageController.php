<?php

namespace App\Http\Controllers\ContactUsPage;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;

class ContactUsPageController extends Controller
{
    public function load_page()
    {
        $page = get_page_details('contactus');
        $contact_details = json_decode(
            PageMetas::where('page_id', $page['id'])->where('meta_key', 'contact_details')->first()->meta_value,
            true
        );
        $main_address = json_decode(
            PageMetas::where('page_id', $page['id'])->where('meta_key', 'main_address')->first()->meta_value,
            true
        );
        $map_and_forms = json_decode(
            PageMetas::where('page_id', $page['id']) -> where('meta_key','map_and_forms')->first()->meta_value,true
        );

        return view('pages.contact-us', compact('page', 'contact_details', 'main_address','map_and_forms'));
    }
}
