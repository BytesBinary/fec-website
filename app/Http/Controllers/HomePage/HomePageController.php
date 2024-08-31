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

        if( $page ) {
            $hero_section = json_decode(
                PageMetas::where('page_id', $page['id'])->where('meta_key', 'hero_section')->first()->meta_value,true
            );
            $hero_section['bg_images'] = json_decode($hero_section['bg_images']);

            $administration_section = PageMetas::where('page_id', $page['id'])
                ->where('meta_type', 'administration')
                ->get();
            foreach ($administration_section as $section) {
                $section->meta_value = json_decode($section->meta_value, true);
            }
            $administration_section = $administration_section->toArray();
        }

        return view('pages.home', array(
            'page' => $page,
            'hero_section' => $hero_section ?? '',
            'administration' => $administration_section ?? '',
        ));
    }

}
