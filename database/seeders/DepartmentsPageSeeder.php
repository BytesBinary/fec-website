<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pages;

class DepartmentsPageSeeder extends seeder{
    /**
     * Run the database seeds.
     * 
     * @return void
     */

     public function run(){
        $Departmentpage = pages::create([
            'page_title' => 'Departments',
            'page_type' => 'parent',
            'page_content' => '',
            'page_sections' => '',
            'page_slug' => 'departments'
        ]);

        $id = $Departmentpage -> id;
        $slug = $Departmentpage -> page_slug;

        $subpages = array(
           'Computer Science & Engineering',
           'Electrical & Electronic Engineering',
           'Civil Engineering',
           'Non-Tech'
        );

        foreach($subpages as $subpage){
            $subpage = pages::create([
                'page_title' => $subpage,
               'page_content' =>'',
               'page_sections' => '',
               'page_slug' => $slug.'/'.strtolower(str_replace(' ','-',$subpage)),
               'page_parent' => $id
            ]);
        }

    }
}