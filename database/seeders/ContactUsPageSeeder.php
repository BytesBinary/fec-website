<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pages;
use Illuminate\Support\Arr;

class ContactUsPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $page = Pages::create([
            'page_title' => 'Contact Us',
            'page_content' => '',
            'page_sections' => '',
            'page_status' => 'publish',
            'page_slug' => 'contactus'
        ]);

        $page->metas()->create([
            'meta_key' => 'main_address',
            'meta_value' => json_encode([
                'location' => array(
                    'title' => 'Address',
                    'details' => 'Dr Kaji Motaher Hossain Rd,Komlapur,Baytul Aman,Faridpur-7800',
                ),
                'phone' => array(
                    'title' => 'Call Us',
                    'details' => '02478847545',
                ),
                'email' => array(
                    'title' => 'Email US',
                    'details' => 'principal.fec@gmail.com',
                ),
            ]),
            'meta_type' => 'json'
        ]);

        $page->metas()->create([
            'meta_key' => 'contact_details',
            'meta_value' => json_encode([
                'administration' => array(
                    'title' => 'Administration',
                    'members' => [
                        [
                            'sl' => '1',
                            'name' => 'Faridpur Engineering College',
                            'designation_section' => '',
                            'web_mail' => 'info@fec.ac.bd',
                        ],
                        [
                            'sl' => '2',
                            'name' => 'Principal, Faridpur Engineering College',
                            'designation_section' => 'Principal',
                            'web_mail' => 'principal@fec.ac.bd',
                        ],
                        [
                            'sl' => '3',
                            'name' => 'Incharge - Exam Control Room, FEC',
                            'designation_section' => 'Incharge - Exam Control Room',
                            'web_mail' => 'exam.control@fec.ac.bd',
                        ],
                        [
                            'sl' => '4',
                            'name' => 'Md. Rakibul Islam',
                            'designation_section' => 'Programmer',
                            'web_mail' => 'rakibul.islam@fec.ac.bd',
                        ],
                        [
                            'sl' => '5',
                            'name' => 'Programmer, Faridpur Engineering College',
                            'designation_section' => 'Programmer',
                            'web_mail' => 'programmer@fec.ac.bd',
                        ],
                        [
                            'sl' => '6',
                            'name' => 'Store Officer, Faridpur Engineering College',
                            'designation_section' => 'Store Officer',
                            'web_mail' => 'storeofficer@fec.ac.bd',
                        ],
                        [
                            'sl' => '7',
                            'name' => 'Head Assistant, Faridpur Engineering College',
                            'designation_section' => 'Head Assistant',
                            'web_mail' => 'headassistant@fec.ac.bd',
                        ],
                        [
                            'sl' => '8',
                            'name' => 'Caretaker, Faridpur Engineering College',
                            'designation_section' => 'Caretaker',
                            'web_mail' => 'caretaker@fec.ac.bd',
                        ],
                    ],
                ),

                'computer_science' => array(
                    'title' => 'Computer Science & Engineering Department',
                    'members' => [
                        [
                            'sl' => '1',
                            'name' => 'Head - Dept. of CSE',
                            'designation_section' => 'Head of the Dept. of CSE',
                            'web_mail' => 'head.cse@fec.ac.bd',
                        ],
                        [
                            'sl' => '2',
                            'name' => 'MD. KHALIL UDDIN',
                            'designation_section' => 'Associate Professor (CSE)',
                            'web_mail' => 'khalil.uddin@fec.ac.bd',
                        ],
                        [
                            'sl' => '3',
                            'name' => 'Dr. Sujit Biswas',
                            'designation_section' => 'Associate Professor (CSE)',
                            'web_mail' => 'sujitedu@fec.ac.bd',
                        ],
                        [
                            'sl' => '4',
                            'name' => 'MD. TUHIN REZA',
                            'designation_section' => 'Lecturer (CSE)',
                            'web_mail' => 'tuhin.reza@fec.ac.bd',
                        ],
                        [
                            'sl' => '5',
                            'name' => 'Md. Rasel Ahmed',
                            'designation_section' => 'Lecturer (CSE)',
                            'web_mail' => 'rasel.ahmed@fec.ac.bd',
                        ],
                        [
                            'sl' => '6',
                            'name' => 'Md. Sumon Reza',
                            'designation_section' => 'Lecturer (CSE)',
                            'web_mail' => 'suman.reza@fec.ac.bd',
                        ],
                        [
                            'sl' => '7',
                            'name' => 'SAMEYA AKTER',
                            'designation_section' => 'Lecturer (CSE)',
                            'web_mail' => 'sameya.akter@fec.ac.bd',
                        ],
                    ],

                ),
                'electrical_electronic_engineering' => array(
                    'title' => 'Electrical & Electronic Enginering',
                    'members' => [
                        [
                            'sl' => '1',
                            'name' => 'Head - Dept. of EEE',
                            'designation_section' => 'Head of the Dept. of EEE',
                            'web_mail' => 'head.eee@fec.ac.bd',
                        ],
                        [
                            'sl' => '2',
                            'name' => 'PARTHA MANDAL',
                            'designation_section' => 'Lecturer (EEE)',
                            'web_mail' => 'mandal.partha@fec.ac.bd',
                        ],
                        [
                            'sl' => '3',
                            'name' => 'Md. Zillur Rahman',
                            'designation_section' => 'Lecturer (EEE)',
                            'web_mail' => 'zrahman@fec.ac.bd',
                        ],
                        [
                            'sl' => '4',
                            'name' => 'Apurbo Biswas',
                            'designation_section' => 'Lecturer (EEE)',
                            'web_mail' => 'abiswas@fec.ac.bd',
                        ],
                        [
                            'sl' => '5',
                            'name' => 'S. M. SHIHAB HASAN',
                            'designation_section' => 'WORKSHOP/LABORATORY IN-CHARGE',
                            'web_mail' => 'shihab.hasan@fec.ac.bd',
                        ],
                    ],
                ),
                'civil_engineering' => array(
                    'title' => 'Civil Engineering Department',
                    'members' => [
                        [
                            'sl' => '1',
                            'name' => 'Head - Dept. of Civil Engineering',
                            'designation_section' => 'Head of the Dept. of Civil Engg.',
                            'web_mail' => 'head.ce@fec.ac.bd',
                        ],
                        [
                            'sl' => '2',
                            'name' => 'Dr. Engr. Md. Mizanur Rahman',
                            'designation_section' => 'Professor (Civil Engg.)',
                            'web_mail' => 'mizanur.rahman@fec.ac.bd',
                        ],
                        [
                            'sl' => '3',
                            'name' => 'Dr. Engr. Md. Mizanur Rahman',
                            'designation_section' => 'Assistant Professor (Civil Engg.)',
                            'web_mail' => 'rkopu@fec.ac.bd',
                        ],
                        [
                            'sl' => '4',
                            'name' => 'Md. Zillur Rahman',
                            'designation_section' => 'Lecturer (EEE)',
                            'web_mail' => '	zrahman@fec.ac.bd',
                        ],
                        [
                            'sl' => '5',
                            'name' => 'Md. Ekhlas Uddin',
                            'designation_section' => 'Lecturer (Civil Engg.)',
                            'web_mail' => 'ekhlas.uddin@fec.ac.bd',
                        ],
                        [
                            'sl' => '6',
                            'name' => 'SHAHED MAHMUD',
                            'designation_section' => 'WORKSHOP/LABORATORY IN-CHARGE',
                            'web_mail' => 'shihab.hasan@fec.ac.bd',
                        ],
                    ]
                ),
                'non_tech_department' => array(
                    'title' => 'Non-Tech Department',
                    'members' => [
                        [
                            'sl' => '1',
                            'name' => 'Head - Nontech',
                            'designation_section' => 'Head of the Dept. of Non-Tech',
                            'web_mail' => 'head.nontech@fec.ac.bd',
                        ],
                        [
                            'sl' => '2',
                            'name' => 'Prof. Fakir Mohammad Nurujjaman',
                            'designation_section' => 'Professor (Economics)',
                            'web_mail' => 'fmjaman@fec.ac.bd',
                        ],
                        [
                            'sl' => '3',
                            'name' => 'Abdus Satter Mia',
                            'designation_section' => 'Associate Professor (Physics)',
                            'web_mail' => 'satter.mia@fec.ac.bd',
                        ],
                        [
                            'sl' => '4',
                            'name' => 'Muhammad Younus Ali',
                            'designation_section' => 'Associate Professor (Math.)',
                            'web_mail' => 'younus.ali@fec.ac.bd',
                        ],
                        [
                            'sl' => '5',
                            'name' => 'Mohammad Arifur Rahman',
                            'designation_section' => 'Associate Professor (Management)',
                            'web_mail' => 'm.arifur_rahman@fec.ac.bd',
                        ],
                        [
                            'sl' => '6',
                            'name' => 'Md. Khalilur Rahman',
                            'designation_section' => 'Lecturer (CSE)',
                            'web_mail' => 'khalilur.rahman@fec.ac.bd',
                        ],
                        [
                            'sl' => '7',
                            'name' => 'Zannatun Naeem',
                            'designation_section' => 'Assistant Professor (Math.)',
                            'web_mail' => 'zannatun.naeem@fec.ac.bd',
                        ],
                        [
                            'sl' => '8',
                            'name' => 'Afia Begum',
                            'designation_section' => 'Lecturer (Physics)',
                            'web_mail' => 'afia.begum@fec.ac.bd',
                        ],
                    ]
                ),
                'library_section' => array(
                    'title' => 'Library section',
                    'members' => [
                        [
                            'sl' => '1',
                            'name' => 'Library,Faridpur Engineering College',
                            'designation_section' => 'Library',
                            'web_mail' => 'library@fec.ac.bd',
                        ],
                        [
                            'sl' => '2',
                            'name' => 'MD. RAFIQUL ISLAM',
                            'designation_section' => 'Librarian',
                            'web_mail' => 'rafiqul.islam@fec.ac.bd',
                        ]
                    ]
                ),
                'registrar_section' => array(
                    'title' => 'Registrar section',
                    'members' => [
                        [
                            'sl' => '1',
                            'name' => 'Registrar,Faridpur Engineering College',
                            'designation_section' => 'Registrar',
                            'web_mail' => 'registrar@fec.ac.bd',
                        ]
                    ]
                ),
                'accounts_section' => array(
                    'title' => 'Accounts section',
                    'members' => [
                        [
                            'sl' => '1',
                            'name' => 'Accountant,Faridpur Engineering College',
                            'designation_section' => 'Accountant',
                            'web_mail' => 'accountant@fec.ac.bd',
                        ],
                        [
                            'sl' => '2',
                            'name' => 'Cashier, Faridpur Engineering College',
                            'designation_section' => 'cashier',
                            'web_mail' => 'cashier@fec.ac.bd',
                        ]
                    ]
                ),
            ]),
            'meta_type' => 'json'
        ]);

        $page->metas()->create([
            'meta_key' => 'map_and_forms',
            'meta_value' => json_encode([
                'map' => array(
                    'map_url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7312.402406850009!2d89.854812!3d23.597116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe2535f9df3a73%3A0x820055c30208a76c!2z4Kar4Kaw4Ka_4Kam4Kaq4KeB4KawIOCmh-CmnuCnjeCmnOCmv-CmqOCmv-Cmr-CmvOCmvuCmsOCmv-CmgiDgppXgprLgp4fgppw!5e0!3m2!1sbn!2sbd!4v1720968348137!5m2!1sbn!2sbd',
                ),
                'form' => array(
                    'name' => 'Your Name',
                    'email' => 'Your Email',
                    'subject' => 'Subject',
                    'message' => 'Message',
                    'button_text' => 'Send Message',
                ),
            ]),
            'meta_type' => 'json'
        ]);
    }
}
