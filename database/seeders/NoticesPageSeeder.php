<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pages;

class NoticesPageSeeder extends seeder{
        /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $page = Pages::create([
            'page_title' => 'Notices',
            'page_content' => '',
            'page_sections' => '',
            'page_status' => 'publish',
            'page_slug' => 'notices'
        ]);

        $page -> metas() -> create([
            'meta_key' => 'hero_section',
            'meta_value' => json_encode([
                'title' => 'Notice Board',
                'description' => 'Featured Notices from Faridpur Engineering College'
            ]),
            'meta_type' => 'json'
        ]);
    }
}