<?php
    namespace Database\Seeders;

    // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use App\Models\Pages;

    class ClubsPageSeeder extends Seeder{
        /**
         * Run the database seeds
         * 
         * @return void
    */
    public function run(){
        $ClubsPage = Pages::create([
            'page_title' => 'Clubs',
            'page_type' => 'parent',
            'page_content' => 'none',
            'page_sections' => '',
            'page_slug' => 'clubs'
        ]);

        $id = $ClubsPage -> id;
        $slug = $ClubsPage -> page_slug;

        $subpages = array(
            'RIC-Research & Innovation Center',
            'FECCDC-Cyber Defense Club',
            'FECDC-Debating Club',
            'FECSA-Sports Association',
            'FECPC-Photographic Club',
            'FECCP-Club of Profession',
            'FECPC-Programming Club',
            'FECIRDC-Islamic Research & Dawah Center',
            'FECRSG-Rover Scout group'
        );

        foreach($subpages as $subpage){
            $subpage = Pages::create([
                'page_title'=>$subpage,
                'page_content' => '',
                'page_sections' => '',
                'page_slug' => $slug.'/'.strtolower(str_replace(' ','-',$subpage)),
                'page_parent' => $id
            ]);
        }
    }

}
?>