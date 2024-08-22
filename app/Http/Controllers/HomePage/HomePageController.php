<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;
use App\Models\Pages;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function load_page()
    {
        $page = get_page_details('home');
        $contact_us_page = get_page_details('contactus');
        $hero_section = json_decode(
            PageMetas::where('page_id', $page['id'])->where('meta_key', 'hero_section')->first()->meta_value,true
        );
        $map_and_forms = json_decode(
            PageMetas::where('page_id', $contact_us_page['id']) -> where('meta_key','map_and_forms')->first()->meta_value,true
        );
        return view('pages.home', compact('page', 'hero_section','map_and_forms'));
    }
}
