<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pages;
use Carbon\Carbon;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = Pages::create([
            'page_title' => 'Home',
            'page_content' => '',
            'page_sections' => '',
            'page_status' => 'publish',
            'page_slug' => 'home'
        ]);

        $page->metas()->create([
            'meta_key' => 'hero_section',
            'meta_value' => json_encode([
                'short_title' => 'Welcome To',
                'main_title' => 'Faridpur Engineering College',
                'sub_title' => 'A place to learn and grow',
                'img' => 'bg-image.jpg',
                'img_alt' => 'Hero Image',
                'logo' => 'FECLogo.png',
                'logo_alt' => 'Logo Image',
                'get_started_btn' => 'Get Started',
                'get_started_btn_url' => '#about',
                'watch_video_btn' => 'Watch Video',
                'watch_video_btn_url' => 'https://youtu.be/_H9B4iynTY0?si=tGqF7He1rRQdkuA8',
            ], JSON_UNESCAPED_UNICODE),
            'meta_type' => 'json',
        ]);

        $members = [
            ['name' => 'Professor Dr. Mizanur Rahman', 'designation' => 'Principal (Administration)','img' =>'assets\img\administration\mizanur-rahman.jpg'],
            ['name' => 'Md. Shamsul Islam', 'designation' => 'Head of the Dept. (CSE)','img' => 'assets\img\administration\shamsul-islam.jpg'],
            ['name' => 'Md. Sanowar Hossain', 'designation' => 'Head of the Dept. (EEE)','img'=>'assets\img\administration\sanowar-hossain.jpg'],
            ['name' => 'Rayhan Khan Opu', 'designation' => 'Head of the Dept. (CE)','img'=>'assets\img\administration\rayhan-khan.jpg'],
        ];

        $page->metas()->create([
            'meta_key' => 'administration',
            'meta_value' => json_encode([
                'title' => 'Administration',
                'members' => $members,
            ], JSON_UNESCAPED_UNICODE),
            'meta_type' => 'json',
        ]);

        $details = [
            ['title' => 'Established','value' => '2010', 'icon' => 'bi bi-bank','animation' => 'fade-up'],
            ['title' => 'Departments','value' => '3', 'icon' => 'bi bi-buildings','animation' => 'fade-down'],
            ['title' => 'Students','value' => '800', 'icon' => 'bi bi-mortarboard','animation' => 'fade-up'],
            ['title' => 'Faculty Members','value' => '30', 'icon' => 'bi bi-people','animation' => 'fade-down'],
        ];

        $page->metas()->create([
            'meta_key' => 'short_details',
            'meta_value' => json_encode([
                'short_details' => $details,
            ]),
            'meta_type' => 'json',
        ]);

        $page->metas()->create([
            'meta_key' => 'about_section',
            'meta_value' => json_encode([
                'section_title' => 'About Us',
                'section_heading' => 'Faridpur Engineering College is located about 2.7 kilometers away from the main city of Faridpur.',
                'section_des' => 'Faridpur Engineering College (FEC) is a public undergraduate college in Faridpur, Bangladesh. It was established in 2010. The college is just 2.7 km away from Faridpur city Located at Dr. Kazi Motaher Hossain Road, Char Kamalapur, Baitul Aman, Faridpur. The academic activities of the college are managed under the Faculty of Engineering and Technology of Dhaka University and the administrative activities under the Directorate of Technical Education. Every year, around 180 students get accepted to undergraduate programs in Electrical and Electronic Engineering (EEE), Civil Engineering (CE) and Computer Science and Engineering (CSE).',
                'video_url' => 'https://www.youtube.com/embed/_H9B4iynTY0?si=hssoHPSX4b3isoSt',
            ]),
            'meta_type' => 'json',
        ]);

        $page->metas()->create([
            'meta_key' => 'online_services',
            'meta_value' => json_encode([
                'section_title' => 'Online Services',
                'section_heading' => 'Here are our online services from which you can get your information instantly.',
                'services' => [
                    [
                        'name' => 'Notices',
                        'description' => 'Anyone can get any notices of this institution from here.',
                        'image_url'=> 'assets/img/services/notice.svg',
                        'button_url' => 'notices',
                        'button_text' => 'view All Notices',
                    ],
                    [
                        'name' => 'Result',
                        'description' => 'Check your academic results by logging into your student account.',
                        'image_url' => 'assets/img/services/result .svg',
                        'button_url' => 'login/students-login',
                        'button_text' => 'view Result',
                    ],
                    [
                        'name' => 'Apply Online',
                        'description' => 'Want to get admission here? Click here to start your admission process.',
                        'image_url' => 'assets/img/services/application.svg',
                        'button_url' => 'https://collegeadmission.eis.du.ac.bd/bn/b45de047fde9788cadae3cfe8e88dcc2',
                        'button_text' => 'Apply Online',
                    ],
                    [
                        'name' => 'Academic Syllabus',
                        'description' => 'Click to view the syllabus.',
                        'image_url' => 'assets/img/services/syllabus.svg',
                        'button_url' => 'academics/syllabus',
                        'button_text' => 'View Syllabus'
                    ],
                    [
                        'name' => 'Academic Calendar',
                        'description' => 'Click to view your academic calendar.',
                        'image_url' => 'assets/img/services/calendar.svg',
                        'button_url' => 'academics/calender',
                        'button_text' => 'View Calender'
                    ],
                ],
            ]),
            'meta_type' => 'json',
        ]);

        $page->metas()->create([
            'meta_key' => 'latest_news',
            'meta_value' => json_encode([
                'section_title' => 'Latest News',
                'news_items' => [
                    [
                        'date_created' => Carbon::now()->format('d M, Y'),
                        'headline' => 'Pain invaded FEC!',
                        'short_des' => 'Faridpur Engineering College’s destruction at the height of the invasion.',
                        'image_url' => 'assets/img/latest-news/pain.jpeg',
                        'card_link_url' => '#',
                    ],
                    [
                        'date_created' => Carbon::now()->format('d M, Y'),
                        'headline' => 'Dangers Alert',
                        'short_des' => 'Muzan bhaya coming so aggressively toward FEC for destroying cafeteria.',
                        'image_url' => 'assets/img/latest-news/muzan.jpg',
                        'card_link_url' => '#',
                    ],
                    [
                        'date_created' => Carbon::now()->format('d M, Y'),
                        'headline' => 'New Non-Tech Dept. Head',
                        'short_des' => 'Dr. Senku will be the new department head of Non-tech Dept. from next week.',
                        'image_url' => 'assets/img/latest-news/senku.jpg',
                        'card_link_url' => '#',
                    ],
                ],
            ]),
            'meta_type' => 'json',
        ]);
        $page->metas()->create([
            'meta_key' => 'events',
            'meta_value' => json_encode([
                'section_title' => 'Recent and Upcoming Events',
                'section_heading' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

                'events_items' => [
                    [
                        'date_created' => Carbon::now()->format('d M, Y'),
                        'headline' => 'Event hoitese!',
                        'short_des' => 'Faridpur Engineering College’s destruction at the height of the invasion.',
                    ],
                    [
                        'date_created' => Carbon::now()->format('d M, Y'),
                        'headline' => 'Pain invaded FEC!',
                        'short_des' => 'Faridpur Engineering College’s destruction at the height of the invasion.',
                    ],
                    [
                        'date_created' => Carbon::now()->format('d M, Y'),
                        'headline' => 'Pain invaded FEC!',
                        'short_des' => 'Faridpur Engineering College’s destruction at the height of the invasion.',
                    ],
                ],
            ]),
            'meta_type' => 'json',
        ]);

        $page->metas()->create([
            'meta_key' => 'research',
            'meta_value' => json_encode([
                'section_title' => 'Research Activities',
                'section_heading' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

                'research_items' => [
                    [
                        'date_created' => Carbon::now()->format('d M, Y'),
                        'headline' => 'Fec er unnoyon',
                        'short_des' => 'Faridpur Engineering College’s destruction at the height of the invasion.',
                    ],
                    [
                        'date_created' => Carbon::now()->format('d M, Y'),
                        'headline' => 'Pain invaded FEC!',
                        'short_des' => 'Faridpur Engineering College’s destruction at the height of the invasion.',
                    ],
                    [
                        'date_created' => Carbon::now()->format('d M, Y'),
                        'headline' => 'Pain invaded FEC!',
                        'short_des' => 'Faridpur Engineering College’s destruction at the height of the invasion.',
                    ],
                ],
            ]),
            'meta_type' => 'json',
        ]);
        $page->metas()->create([
            'meta_key' => 'faq',
            'meta_value' => json_encode([
                'section_title' => 'Frequently Asked Questions',
                'question_item' => [
                    [
                        'question_title' => 'Non consectetur a erat nam at lectus urna duis?',
                        'question_description' => 'Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.',
                    ],
                    [
                        'question_title' => 'Non consectetur a erat nam at lectus urna duis?',
                        'question_description' => 'Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.',
                    ],
                    [
                        'question_title' => 'Non consectetur a erat nam at lectus urna duis?',
                        'question_description' => 'Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.',
                    ]
                ],
            ]),
            'meta_type' => 'json',
        ]);
    }
}
