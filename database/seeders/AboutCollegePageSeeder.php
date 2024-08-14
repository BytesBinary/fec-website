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
        $slug = $aboutCollegePage->page_slug;

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
                'page_slug' => $slug . '/' . strtolower(str_replace(array(' '), '-', $subpage)),
                'page_parent' => $id
            ]);
        }
    }
}
