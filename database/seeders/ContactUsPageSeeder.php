<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pages;

class ContactUsPageSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public function run(){
        $page = Pages::create([
            'page_title' => 'Contact Us',
            'page_content' => '',
            'page_sections' => '',
            'page_status' => 'publish',
            'page_slug' => 'contactus'
        ]);

        $page -> metas() -> create([
            'meta_key' => 'hero_section',
            'meta_value' => json_encode([
                'title' => 'Contact Us',
                'college_name' => 'Faridpur Engineering College',
                'address' => 'Faridpur sadar, Faridpur 7800'
            ]),
            'meta_type' => 'json'
        ]);
     }
}