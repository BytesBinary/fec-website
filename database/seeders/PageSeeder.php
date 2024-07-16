<?php

namespace Database\Seeders;

use App\Models\Pages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = Pages::create([
            'page_title' => 'Home',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'home'
        ]);

        $page->metas()->create([
            'meta_key' => 'hero_section',
            'meta_value' => json_encode([
                'short_title' => 'Welcome To',
                'main_title' => 'Faridpur Engineering College',
                'sub_title' => 'A place to learn and grow',
                'img' => 'bg-image.jpg',
                'img_alt' => 'Hero Image',
                'logo' => 'FECLogo.png',
                'logo_alt' => 'Logo Image',
                'get_started_btn' => 'Get Started',
                'get_started_btn_url' => '#about',
                'watch_video_btn' => 'Watch Video',
                'watch_video_btn_url' => 'https://youtu.be/_H9B4iynTY0?si=tGqF7He1rRQdkuA8',
            ]),
            'meta_type' => 'json',
        ]);
    }
}
