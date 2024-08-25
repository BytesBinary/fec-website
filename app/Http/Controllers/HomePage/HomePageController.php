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

        $administration = json_decode(
            PageMetas::where('page_id', $page['id'])->where('meta_key','administration')->first()->meta_value,true
        );

        $short_description = json_decode(
            PageMetas::where('page_id',$page['id']) -> where('meta_key','short_description')->first()->meta_value, true
        );

        $about_section = json_decode(
            PageMetas::where('page_id', $page['id'])->where('meta_key', 'about_section')->first()->meta_value,
            true
        );

        $online_services = json_decode(
            PageMetas::where('page_id', $page['id'])->where('meta_key', 'online_services')->first()->meta_value,
            true
        );

        $latest_news = json_decode(
            PageMetas::where('page_id', $page['id'])->where('meta_key', 'latest_news')->first()->meta_value,
            true
        );

        $events = json_decode(
            PageMetas::where('page_id',$page['id'])->where('meta_key', 'events')->first()->meta_value, true
        );

        $research = json_decode(
            PageMetas::where('page_id',$page['id'])->where('meta_key', 'research')->first()->meta_value, true
        );

        $faq = json_decode(
            PageMetas::where('page_id',$page['id'])-> where('meta_key','faq')->first()->meta_value,true
        );

        return view('pages.home', compact('page', 'hero_section', 'administration', 'short_description', 'about_section', 'online_services', 'latest_news', 'events', 'research', 'faq'));
    }

}
