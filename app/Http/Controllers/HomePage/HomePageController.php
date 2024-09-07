<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;
use App\Models\Pages;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\JsonDecoder;

class HomePageController extends Controller
{
    public function load_home_page()
    {
        $page = get_page_details('home');

        if ($page) {
            $hero_section = PageMetas::where('page_id', $page['id'])->where('meta_key', 'hero_section')->first();
            if( $hero_section ) {
                $hero_section = $hero_section->toArray();
                $hero_section['meta_value'] = json_decode($hero_section['meta_value'], true);
                $hero_section['meta_value']['bg_images'] = json_decode($hero_section['meta_value']['bg_images'], true);
            }

            $administration_section = PageMetas::where('page_id', $page['id'])
                ->where('meta_type', 'administration')
                ->get();
            foreach ($administration_section as $section) {
                $section->meta_value = json_decode($section->meta_value, true);
            }

            $short_details = PageMetas::where('page_id', $page['id'])
                ->where('meta_type', 'short_details')
                ->first();
            if( $short_details ) {
                $short_details->meta_value = json_decode($short_details->meta_value, true);
            }

            $online_services_section = PageMetas::where('page_id', $page['id'])
                ->where('meta_type', 'online_services')
                ->get();
            foreach ($online_services_section as $section) {
                $section->meta_value = json_decode($section->meta_value, true);
            }

            $faq_section = PageMetas::where('page_id', $page['id'])
                ->where('meta_type', 'faq')
                ->get();
            foreach ($faq_section as $section) {
                $section->meta_value = json_decode($section->meta_value, true);
            }

            $aboutUs = PageMetas::where('meta_key', 'at_a_glance')->first();
            if( $aboutUs ) {
                $aboutUs = json_decode($aboutUs->meta_value);
            }

            $events = Post::where('type', 'event')->take(3)->get();

            $research = Post::where('type', 'research')->take(3)->get();
        }

        return view('pages.home', array(
            'page' => $page,
            'hero_section' => $hero_section ?? '',
            'administration' => $administration_section ?? '',
            'short_details' => $short_details->meta_value ?? '',
            'online_services_section' => $online_services_section ?? '',
            'faq_section' => $faq_section ?? '',
            'aboutUs' => $aboutUs ?? '',
            'events' => $events ?? '',
            'researches' => $research ?? '',
        ));
    }
}
