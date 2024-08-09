<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pages;

class AboutCollegePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create the "About College" page
        $aboutCollegePage = Pages::create([
            'page_title' => 'About College',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'about-college'
        ]);

        $id = $aboutCollegePage->id;

        $subpages = array(
            'At A Glance',
            'Vision & Mission',
            'Infrastructure',
            'Message from Principal',
        );

        foreach ($subpages as $subpage) {
            $subpage = Pages::create([
                'page_title' => $subpage,
                'page_content' => '',
                'page_sections' => '',
                'page_slug' => 'about-college/' . strtolower(str_replace(' ', '-', $subpage)),
                'page_parent' => $id
            ]);
        }
    }
}
