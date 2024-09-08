<?php

namespace App\Http\Controllers\ContactUsPage;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;

class ContactUsPageController extends Controller
{
    public function load_page()
    {
        $page = get_page_details('contactus');

        // Check if the meta exists before decoding
        $contact_meta = PageMetas::where('page_id', $page['id'])
            ->where('meta_key', 'contact_details')
            ->first();
        $contact_details = $contact_meta ? json_decode($contact_meta->meta_value, true) : [];

        $address_meta = PageMetas::where('page_id', $page['id'])
            ->where('meta_key', 'main_address')
            ->first();
        $main_address = $address_meta ? json_decode($address_meta->meta_value, true) : [];

        $map_and_forms_meta = PageMetas::where('page_id', $page['id'])
            ->where('meta_key', 'map_and_forms')
            ->first();
        $map_and_forms = $map_and_forms_meta ? json_decode($map_and_forms_meta->meta_value, true) : [];

        return view('pages.contact-us', compact('page', 'contact_details', 'main_address', 'map_and_forms'));
    }
}
