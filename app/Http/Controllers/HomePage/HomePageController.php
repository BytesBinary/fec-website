<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;
use App\Models\Pages;
use Illuminate\Http\Request;
use PhpParser\JsonDecoder;

class HomePageController extends Controller
{
    public function load_page()
    {
        $page = get_page_details('home');

        $hero_section = json_decode(
            PageMetas::where('page_id', $page['id'])->where('meta_key', 'hero_section')->first()->meta_value,true
        );
        $hero_section['bg_images'] = json_decode($hero_section['bg_images']);

        return view('pages.home', compact('page', 'hero_section'));
    }

}
