<?php

namespace Database\Seeders;

use App\Models\Notices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pages;

class AcademicPageSeeder extends Seeder{
        /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $AcademicPage = Pages::create([
            'page_title' => 'Academics',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'academics'
        ]);

        $id = $AcademicPage -> id;
        $slug = $AcademicPage -> page_slug;

        $subpages = array(
           'Syllabus',
           'Semester Plan',
           'Login'
        );

        foreach($subpages as $subpage){
            $subpage = Pages::create([
                'page_title' => $subpage,
                'page_content' =>'',
                'page_sections' => '',
                'page_slug' => $slug.'/'.strtolower(str_replace(' ','-',$subpage)),
                'page_parent' => $id
            ]);
        }

        Notices::factory()->count(100)->create([
            'type' => 'syllabus'
        ]);
    }
}
