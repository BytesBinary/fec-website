<?php

namespace Database\Seeders;

use App\Models\Pages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the 'Home' page
        Pages::create([
            'page_title' => 'Home',
            'page_content' => '',
            'page_sections' => '',
            'page_status' => 'publish',
            'page_slug' => 'home'
        ]);

        // Create the 'Notices' page
        Pages::create([
            'page_title' => 'Notices',
            'page_content' => '',
            'page_sections' => '',
            'page_status' => 'publish',
            'page_slug' => 'notices'
        ]);

        // Create the 'Contact Us' page
        Pages::create([
            'page_title' => 'Contact Us',
            'page_content' => '',
            'page_sections' => '',
            'page_status' => 'publish',
            'page_slug' => 'contactus'
        ]);

        // Create the 'Clubs' page
        Pages::create([
            'page_title' => 'Clubs',
            'page_type' => 'parent',
            'page_content' => 'none',
            'page_sections' => '',
            'page_slug' => 'clubs'
        ]);

        // Create the 'Login' page and its subpages
        $loginPage = Pages::create([
            'page_title' => 'Login',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'login'
        ]);
        $id = $loginPage->id;
        $slug = $loginPage->page_slug;
        $subpages = array(
            'Students Login',
            'Teachers Login',
            'Admin Login'
        );
        foreach ($subpages as $subpage) {
            Pages::create([
                'page_title' => $subpage,
                'page_content' => '',
                'page_sections' => '',
                'page_slug' => $slug . '/' . strtolower(str_replace(array(' '), '-', $subpage)),
                'page_parent' => $id
            ]);
        }

        // Create the 'Departments' page and its subpages
        $department_page = Pages::create([
            'page_title' => 'Departments',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'departments'
        ]);
        $id = $department_page -> id;
        $slug = $department_page -> page_slug;
        $subpages = array(
            'Computer Science & Engineering',
            'Electrical & Electronic Engineering',
            'Civil Engineering',
            'Non-Tech'
        );
        foreach($subpages as $subpage){
            Pages::create([
                'page_title' => $subpage,
                'page_content' =>'',
                'page_sections' => '',
                'page_slug' => $slug.'/'.strtolower(str_replace(' ','-',$subpage)),
                'page_parent' => $id
            ]);
        }

        // Create the 'About College' page and its subpages
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
            Pages::create([
                'page_title' => $subpage,
                'page_content' => '',
                'page_sections' => '',
                'page_slug' => $slug . '/' . strtolower(str_replace(array(' '), '-', $subpage)),
                'page_parent' => $id
            ]);
        }

        // Create the 'Academics' page and its subpages
        $academicPage = Pages::create([
            'page_title' => 'Academics',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'academics'
        ]);
        $id = $academicPage -> id;
        $slug = $academicPage -> page_slug;
        $subpages = array(
            'Syllabus',
            'Calender'
        );
        foreach($subpages as $subpage){
            Pages::create([
                'page_title' => $subpage,
                'page_content' =>'',
                'page_sections' => '',
                'page_slug' => $slug.'/'.strtolower(str_replace(' ','-',$subpage)),
                'page_parent' => $id
            ]);
        }

        // Create the 'Admission' page and its subpages
        $admissionPage = Pages::create([
            'page_title' => 'Admission',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'admission'
        ]);
        $id = $admissionPage -> id;
        $slug = $admissionPage -> page_slug;
        $subpages = array(
            'Admission Information',
            'Admission Test Result',
            'Apply Online'
        );
        foreach($subpages as $subpage){
            Pages::create([
                'page_title' => $subpage,
                'page_content' => '',
                'page_sections' => '',
                'page_slug' => $slug.'/'.strtolower(str_replace(' ','-',$subpage)),
                'page_parent' => $id
            ]);
        }
    }
}
