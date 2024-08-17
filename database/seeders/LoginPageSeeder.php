<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pages;

class LoginPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        $LoginPage = Pages::create([
            'page_title' => 'Login Page',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'login'
        ]);

        $id = $LoginPage->id;
        $slug = $LoginPage->page_slug;

        $subpages = array(
            'Students Login',
            'Teachers Login'
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
