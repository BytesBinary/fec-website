<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use App\Models\Pages;

    class AdmissionPageSeeder extends Seeder{
        /**
         * Run the database seeds
         *
         * @return void
         */

         public function run(){
            //create the "Admission" pages
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
                $subpage = Pages::create([
                    'page_title' => $subpage,
                    'page_content' => '',
                    'page_sections' => '',
                    'page_slug' => $slug.'/'.strtolower(str_replace(' ','-',$subpage)),
                    'page_parent' => $id
                ]);
            }
        }
    }
