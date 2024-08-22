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
            'page_title' => 'Login',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'login'
        ]);

        $id = $LoginPage->id;
        $slug = $LoginPage->page_slug;

        $subpages = array(
            'Students Login',
            'Teachers Login',
            'Admin Login'
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

        $LoginPage->metas()->create([
            'meta_key' => 'admin_login',
            'meta_value' => json_encode([
                'page_title' => 'Admin Login',
                'page_logo' => 'assets/img/FEClogo.png',
            ]),
            'meta_type' => 'json',
        ]);
    }
}
