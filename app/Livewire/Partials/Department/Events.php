<?php

namespace App\Livewire\Partials\Department;

use Livewire\Component;

class Events extends Component
{
    public $department;
    public $event = [];
    public $deptEvent = [
        'cse' => [
            'dept' => 'Computer Science and Engineering',
            'randomEvents' => [
                [
                    'img' => 'images/bg-image.jpg',
                    'cardTitle' => 'Tech Innovation Conference 2024',
                    'cardDesc' => 'Join us for a conference featuring keynote speakers and innovators in the tech industry.',
                    'date' => 'March 5, 2024'
                ],
                [
                    'img' => 'images/bg-image.jpg',
                    'cardTitle' => 'AI in Healthcare Symposium',
                    'cardDesc' => 'Explore the latest innovations and research in AI applications in the healthcare industry.',
                    'date' => 'April 15, 2024'
                ],
                [
                    'img' => 'images/bg-image.jpg',
                    'cardTitle' => 'Data Science Bootcamp',
                    'cardDesc' => 'A bootcamp focusing on building data science skills, from machine learning to data analysis.',
                    'date' => 'June 1, 2024'
                ],
                [
                    'img' => 'images/bg-image.jpg',
                    'cardTitle' => 'Cybersecurity Summit',
                    'cardDesc' => 'A summit featuring experts in cybersecurity, discussing threats and prevention techniques.',
                    'date' => 'July 20, 2024'
                ],
                [
                    'img' => 'images/bg-image.jpg',
                    'cardTitle' => 'Blockchain Technology Conference',
                    'cardDesc' => 'A conference covering the latest advancements in blockchain technology and its applications.',
                    'date' => 'September 10, 2024'
                ]
            ]
        ],
        'eee' => [
            'dept' => 'Electrical and Electronics Engineering',
            'img' => 'images/bg-image.jpg',
            'randomEvents' => [
                [
                    'img' => 'images/bg-image.jpg',
                    'cardTitle' => 'Power Systems Summit',
                    'cardDesc' => 'A summit discussing advancements in power systems and energy distribution.',
                    'date' => 'April 1, 2024'
                ],
                [
                    'img' => 'images/bg-image.jpg',
                    'cardTitle' => 'Control Systems Workshop',
                    'cardDesc' => 'A workshop covering the latest technologies and techniques in control systems.',
                    'date' => 'May 15, 2024'
                ],
                [
                    'img' => 'images/bg-image.jpg',
                    'cardTitle' => 'Smart Grid Technologies Conference',
                    'cardDesc' => 'A conference discussing innovations in smart grid technologies and energy efficiency.',
                    'date' => 'June 20, 2024'
                ],
                [
                    'img' => 'images/bg-image.jpg',
                    'cardTitle' => 'Electrical Machines Expo',
                    'cardDesc' => 'An expo showcasing the latest advancements in electrical machinery and power generation.',
                    'date' => 'August 10, 2024'
                ]
            ]
        ],
        'ce' => [
            'dept' => 'Civil Engineering',
            'img' => 'images/bg-image.jpg',
            'randomEvents' => [
                [
                    'img' => 'images/bg-image.jpg',
                    'cardTitle' => 'Sustainable Building Techniques Workshop',
                    'cardDesc' => 'A workshop on sustainable building practices and eco-friendly architecture.',
                    'date' => 'April 10, 2024'
                ],
                [
                    'img' => 'images/bg-image.jpg',
                    'cardTitle' => 'Structural Engineering Conference',
                    'cardDesc' => 'A conference focusing on the latest research in structural engineering and materials.',
                    'date' => 'June 5, 2024'
                ],
                [
                    'img' => 'images/bg-image.jpg',
                    'cardTitle' => 'Water Resources Engineering Summit',
                    'cardDesc' => 'A summit discussing modern techniques in water resources management and sustainability.',
                    'date' => 'July 25, 2024'
                ],
                [
                    'img' => 'images/bg-image.jpg',
                    'cardTitle' => 'Civil Engineering Innovations Expo',
                    'cardDesc' => 'An expo showcasing the latest innovations in civil engineering, construction, and materials.',
                    'date' => 'September 15, 2024'
                ]
            ]
        ]
    ];

    public function render()
    {
        $this->department = request()->route('department');
        switch( $this-> department ){
            case 'cse' :
                $this->event = $this->deptEvent['cse'];
                break;
            case 'eee' :
                $this->event = $this->deptEvent['eee'];
                break;
            case 'ce' :
                $this->event = $this->deptEvent['ce'];
                break;
        }
        return view('livewire.partials.department.events',['event' => $this->event])
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department',$this->department));
    }
}
