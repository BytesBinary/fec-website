<?php

namespace App\Livewire\Partials\Department;

use Livewire\Component;

class About extends Component
{
    public $about = [];
    public $department;
    public $departmentData = [
            'cse' => [
                'cardTitle' => 'Computer Science And Engineering',
                'dept' => 'CSE',
                'deptDesc' => 'Computer Science Engineering is an engineering course that involves several computer science aspects essential for the creation of the computer system. It is a four-year undergraduate engineering course wherein students study computer software & hardware for theoretical & practical knowledge.',
                'mail' => 'head.cse@fec.ac.bd',
                'phone' => '+8801788844430',
                'subInCourse' => [
                    'Computer Architecture & Organization',
                    'Cloud Computing',
                    'Operating Systems & Compiler Design',
                    'Design & Analysis of Algorithms',
                    'Data Structures and Algorithm'
                ],
                'image' => 'https://anjaneyauniversity.ac.in/blog/wp-content/uploads/2023/08/wepik-export-20230808104826aZeq.jpeg'
            ],
            'eee' => [
                'cardTitle' => 'Electrical & Electronics Engineering',
                'dept' => 'EEE',
                'deptDesc' => 'Electrical and Electronics Engineering is an engineering discipline that deals with Electrical and Machine technology, Electrons, Circuit analysis, Electromagnetism, Instrumentations, Materials for Electrical Engineering, Control systems, Transmission and Distribution, and Power engineering.',
                'mail' => 'head.eee@fec.ac.bd',
                'phone' => '+88001716589997',
                'subInCourse' => [
                    'Power systems',
                    'Control systems',
                    'Signals and systems',
                    'Electrical machines',
                    'Microprocessors'
                ],
                'image' => 'https://set.jainuniversity.ac.in/uploads/blog/eee-engineering-full-form.jpg'
            ],
            'ce' => [
                'cardTitle' => 'Civil Engineering',
                'dept' => 'CE',
                'deptDesc' => 'Civil engineers design, build, and maintain the foundation for our modern society – our buildings, roads and bridges, drinking water and energy systems, sea ports and airports, and the infrastructure for a cleaner environment, to name just a few.',
                'mail' => 'head.ce@fec.ac.bd',
                'phone' => '+8801819425553',
                'subInCourse' => [
                    'Engineering drawing',
                    'Environmental engineering',
                    'Structural engineering',
                    'Surveying',
                    'Construction Management'
                ],
                'image' => 'https://www.dreamdesigninc.com/wp-content/uploads/2022/09/civilengineering_hero.jpg'
            ]
        ];

    public function render()
    {
        $this->department = request()->route('department');

        switch( $this->department ){
            case 'cse' :
                $this->about = $this->departmentData['cse'];
                break;
            case 'eee' :
                $this->about = $this->departmentData['eee'];
                break;
            case 'ce' :
                $this->about = $this->departmentData['ce'];
                break;

        }


        return view('livewire.partials.department.about' , ['about' => $this->about])
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department',$this->department));
    }
}
