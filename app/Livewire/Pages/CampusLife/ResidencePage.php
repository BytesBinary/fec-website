<?php

namespace App\Livewire\Pages\CampusLife;

use Livewire\Component;

class ResidencePage extends Component
{
    public $images = [];

    public $hallName = 'south-hall';
    public $viewData;


    public function get_data($hallName)
    {
        $data = [
            'south-hall' => [
                'nav' => [
                    'title'  => 'South Hall',
                    'slogan' => 'Your home away from home.',
                ],
                'about' => [
                    'desc' => 'South Hall offers top-tier accommodations with modern amenities for 160 students. The hall features a fully equipped kitchen, a reading room, and 3 nutritious meals a day to ensure a comfortable and balanced lifestyle for its residents. Additionally, a guest room is available for visitors.',
                ],
                'housing' => [
                    'room-no'  => 40,
                    'capacity' => 160,
                    'occupied' => 158,
                ],
                'schedule' => [
                    'breakfast' => '8:30 AM - 10:00 AM',
                    'lunch'     => '13:00 PM - 15:00 PM',
                    'dinner'    => '20:00 PM - 22:00 PM',
                ],
                'facilities' => [
                    ['Wi-Fi', 'Available in all dormitories'],
                    ['Laundry', 'Self-service laundry rooms'],
                    ['Study Rooms', 'Dedicated quiet areas for study'],
                    ['Cafeteria', 'Affordable and hygienic meals'],
                    ['Gym', 'Equipped with modern fitness equipment'],
                    ['Security', '24/7 surveillance and guards'],
                    ['Recreation', 'Common rooms with indoor games'],
                    ['Transport', 'Shuttle service to the campus'],
                    ['Medical', 'On-call doctor and first aid'],
                ],
                'administration' => [
                    'provost' => [
                        'name'  => 'MD. Sanowar Hossain',
                        'email' => 'sanwar.hossain@fec.ac.bd',
                        'phone' => '+8801716589997',
                    ],
                    'accountant' => [
                        'name'  => 'Md Habib',
                        'email' => 'accountant@fec.edu.bd',
                        'phone' => '+8801711000000',
                    ],
                ],
                'images' => [
                    ['src' => asset('images/hero-img.jpg')],
                    ['src' => asset('images/hero-img1.jpg')],
                    ['src' => asset('images/hero-bg2.jpg')],
                ],
            ],
            'north-hall' => [
                'nav' => [
                    'title'  => 'North Hall',
                    'slogan' => 'Your home away from home.',
                ],
                'about' => [
                    'desc' => 'North Hall offers top-tier accommodations with modern amenities for 160 students. The hall features a fully equipped kitchen, a reading room, and 3 nutritious meals a day to ensure a comfortable and balanced lifestyle for its residents. Additionally, a guest room is available for visitors.',
                ],
                'housing' => [
                    'room-no'  => 40,
                    'capacity' => 160,
                    'occupied' => 150,
                ],
                'schedule' => [
                    'breakfast' => '8:30 AM - 10:00 AM',
                    'lunch'     => '13:00 PM - 15:00 PM',
                    'dinner'    => '20:00 PM - 21:30 PM',
                ],
                'facilities' => [
                    ['Wi-Fi', 'Available in all dormitories'],
                    ['Laundry', 'Self-service laundry rooms'],
                    ['Study Rooms', 'Dedicated quiet areas for study'],
                    ['Cafeteria', 'Affordable and hygienic meals'],
                    ['Gym', 'Equipped with modern fitness equipment'],
                    ['Security', '24/7 surveillance and guards'],
                    ['Recreation', 'Common rooms with indoor games'],
                    ['Transport', 'Shuttle service to the campus'],
                    ['Medical', 'On-call doctor and first aid'],
                ],
                'administration' => [
                    'provost' => [
                        'name'  => 'MD. Rayhan Khan Apu',
                        'email' => 'rkopu@fec.ac.bd ',
                        'phone' => '+8801700000000',
                    ],
                    'accountant' => [
                        'name'  => 'Accountant Name',
                        'email' => 'accountant@fec.edu.bd',
                        'phone' => '+8801711000000',
                    ],
                ],
                'images' => [
                    ['src' => asset('images/hero-img.jpg')],
                    ['src' => asset('images/hero-img1.jpg')],
                    ['src' => asset('images/hero-bg2.jpg')],
                ],
            ],
            'female-hall' => [
                'nav' => [
                    'title'  => 'Female Hall',
                    'slogan' => 'Your home away from home.',
                ],
                'about' => [
                    'desc' => 'Female Hall offers top-tier accommodations with modern amenities for 160 students. The hall features a fully equipped kitchen, a reading room, and 3 nutritious meals a day to ensure a comfortable and balanced lifestyle for its residents. Additionally, a guest room is available for visitors.',
                ],
                'housing' => [
                    'room-no'  => 30,
                    'capacity' => 120,
                    'occupied' => 70,
                ],
                'schedule' => [
                    'breakfast' => '8:30 AM - 10:00 AM',
                    'lunch'     => '13:00 PM - 15:00 PM',
                    'dinner'    => '20:00 PM - 22:00 PM',
                ],
                'facilities' => [
                    ['Wi-Fi', 'Available in all dormitories'],
                    ['Laundry', 'Self-service laundry rooms'],
                    ['Study Rooms', 'Dedicated quiet areas for study'],
                    ['Cafeteria', 'Affordable and hygienic meals'],
                    ['Gym', 'Equipped with modern fitness equipment'],
                    ['Security', '24/7 surveillance and guards'],
                    ['Recreation', 'Common rooms with indoor games'],
                    ['Transport', 'Shuttle service to the campus'],
                    ['Medical', 'On-call doctor and first aid'],
                ],
                'administration' => [
                    'provost' => [
                        'name'  => 'Mrs. Zannatun Nayeem',
                        'email' => 'zannatun.naeem@fec.ac.bd',
                        'phone' => '+8801700000000',
                    ],
                    'accountant' => [
                        'name'  => 'Ms. Anika Rahman',
                        'email' => 'accountant@fec.edu.bd',
                        'phone' => '+8801711000000',
                    ],
                ],
                'images' => [
                    ['src' => asset('images/hero-img.jpg')],
                    ['src' => asset('images/hero-img1.jpg')],
                    ['src' => asset('images/hero-bg2.jpg')],
                ],
            ],
        ];

        return $data[$hallName] ?? [];
    }

 
    public function mount($name = 'south-hall')
    {
        $this->hallName = $name;
        $this->viewData = $this->get_data($this->hallName);
        $this->hallName = ucwords(str_replace('-', ' ', $name));
        
        $this->images = [

            [
                'src' => asset('images/hero-img.jpg'),
            ],
            [
                'src' => asset('images/hero-img1.jpg'),

            ],
            [
                'src' => asset('images/hero-bg2.jpg'),
            ]
        ];
    }
    public function render()
    {
        return view('livewire.pages.campus-life.residence-page');
    }
}
