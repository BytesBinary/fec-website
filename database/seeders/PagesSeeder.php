<?php

namespace Database\Seeders;

use App\Models\Pages;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createHomePage('true');
        $this->createAboutCollegePage('true');
        $this->createNoticesPage();
        $this->createDepartmentsPage('true');
        $this->createClubsPage();
        $this->createActivitiesPage();
        $this->createAcademicsPage();
        $this->createAdmissionPage();
        $this->createContactUsPage('true');
        $this->createLoginPage();
    }

    private function createHomePage( $is_editable = 'false' ): void
    {
        Pages::create([
            'page_title' => 'Home',
            'page_content' => '',
            'page_sections' => '',
            'page_status' => 'publish',
            'page_slug' => 'home',
            'is_editable' => $is_editable,
        ]);
    }

    private function createAboutCollegePage($is_editable = 'false'): void
    {
        $aboutCollegePage = Pages::create([
            'page_title' => 'About College',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'about-college',
            'is_editable' => $is_editable,
        ]);
        $id = $aboutCollegePage->id;
        $slug = $aboutCollegePage->page_slug;
        $subpages = [
            'At A Glance',
            'Vision & Mission',
            'Infrastructure',
            'Message from Principal',
        ];
        foreach ($subpages as $subpage) {
            Pages::create([
                'page_title' => $subpage,
                'page_content' => '',
                'page_sections' => '',
                'page_slug' => $slug . '/' . strtolower(str_replace(' ', '-', $subpage)),
                'page_parent' => $id,
                'is_editable' => $is_editable
            ]);
        }
    }

    private function createNoticesPage($is_editable = 'false'): void
    {
        Pages::create([
            'page_title' => 'Notices',
            'page_content' => '',
            'page_sections' => '',
            'page_status' => 'publish',
            'page_slug' => 'notices',
            'is_editable' => $is_editable
        ]);
    }

    private function createDepartmentsPage($is_editable = 'false'): void
    {
        $departmentPage = Pages::create([
            'page_title' => 'Departments',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'departments',
            'is_editable' => $is_editable,
        ]);
        $id = $departmentPage->id;
        $slug = $departmentPage->page_slug;
        $subpages = [
            'Computer Science & Engineering',
            'Electrical & Electronic Engineering',
            'Civil Engineering',
            'Non-Tech'
        ];
        foreach ($subpages as $subpage) {
            Pages::create([
                'page_title' => $subpage,
                'page_content' => '',
                'page_sections' => '',
                'page_slug' => $slug . '/' . strtolower(str_replace(' ', '-', $subpage)),
                'page_parent' => $id,
                'is_editable' => $is_editable,
            ]);
        }
    }

    private function createClubsPage($is_editable = 'false'): void
    {
        Pages::create([
            'page_title' => 'Clubs',
            'page_type' => 'parent',
            'page_content' => 'none',
            'page_sections' => '',
            'page_slug' => 'clubs',
            'is_editable' => $is_editable,
        ]);
    }

    private function createActivitiesPage($is_editable = 'false'): void
    {
        $activitiesPage = Pages::create([
            'page_title' => 'Activities',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'activities',
            'is_editable' => $is_editable,
        ]);
        $id = $activitiesPage->id;
        $slug = $activitiesPage->page_slug;
        $subpages = [
            'Researches',
            'Events'
        ];
        foreach ($subpages as $subpage) {
            Pages::create([
                'page_title' => $subpage,
                'page_content' => '',
                'page_sections' => '',
                'page_slug' => $slug . '/' . strtolower(str_replace(' ', '-', $subpage)),
                'page_parent' => $id,
                'is_editable' => $is_editable,
            ]);
        }
    }

    private function createAcademicsPage($is_editable = 'false'): void
    {
        $academicPage = Pages::create([
            'page_title' => 'Academics',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'academics',
            'is_editable' => $is_editable,
        ]);
        $id = $academicPage->id;
        $slug = $academicPage->page_slug;
        $subpages = [
            'Syllabus',
            'Calender'
        ];
        foreach ($subpages as $subpage) {
            Pages::create([
                'page_title' => $subpage,
                'page_content' => '',
                'page_sections' => '',
                'page_slug' => $slug . '/' . strtolower(str_replace(' ', '-', $subpage)),
                'page_parent' => $id,
                'is_editable' => $is_editable,
            ]);
        }
    }

    private function createAdmissionPage($is_editable = 'false'): void
    {
        $admissionPage = Pages::create([
            'page_title' => 'Admission',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'admission',
            'is_editable' => $is_editable,
        ]);
        $id = $admissionPage->id;
        $slug = $admissionPage->page_slug;
        $subpages = [
            'Admission Information',
            'Admission Test Result',
            'Apply Online'
        ];
        foreach ($subpages as $subpage) {
            Pages::create([
                'page_title' => $subpage,
                'page_content' => '',
                'page_sections' => '',
                'page_slug' => $slug . '/' . strtolower(str_replace(' ', '-', $subpage)),
                'page_parent' => $id,
                'is_editable' => $is_editable,
            ]);
        }
    }

    private function createContactUsPage($is_editable = 'false'): void
    {
        Pages::create([
            'page_title' => 'Contact Us',
            'page_content' => '',
            'page_sections' => '',
            'page_status' => 'publish',
            'page_slug' => 'contactus',
            'is_editable' => $is_editable,
        ]);
    }

    private function createLoginPage($is_editable = 'false'): void
    {
        $loginPage = Pages::create([
            'page_title' => 'Login',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'login',
            'is_editable' => $is_editable
        ]);
        $id = $loginPage->id;
        $slug = $loginPage->page_slug;
        $subpages = [
            'Students Login',
            'Teachers Login',
            'Admin Login'
        ];
        foreach ($subpages as $subpage) {
            Pages::create([
                'page_title' => $subpage,
                'page_content' => '',
                'page_sections' => '',
                'page_slug' => $slug . '/' . strtolower(str_replace(' ', '-', $subpage)),
                'page_parent' => $id,
                'is_editable' => $is_editable,
            ]);
        }
    }
}
