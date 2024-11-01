<?php

namespace App\Livewire\Partials\Home;

use Livewire\Component;

class Administration extends Component
{


    public $principal = [];
    public $departmentHead = [];

    public function mount()
    {
        $this->principal = [
            'image' => asset('images/administration/principal.jpg'),
            'name' => 'Prof. Dr. Engr. Md. Mizanur Rahman',
            'title' => 'Principal',
            'message' => " It is my pleasure to introduce my heart-touching engineering institution “The Faridpur Engineering College,” which has been on its journey since 2010. Its short form is FEC, whereas the Bangla pronunciation is “ফরিদপুর ইঞ্জিনিয়ারিং কলেজ (ফইক).
                              The college is situated nearby Baitul Aman Bazar, about three km from the heart of Faridpur town. Faridpur Engineering College is a mainstream government undergraduate college in engineering disciplines and is affiliated with the University of Dhaka under the Faculty of Engineering & Technology..."
        ];
        $this->departmentHead = [
            [
                'route' => route('dept-head-cse'),
                'image' => asset('images/administration/cse-head.jpg'),
                'name' => 'Md. Shamsul Islam',
                'title' => 'Head of the Dept. CSE'
            ],
            [
                'route' => route('dept-head-eee'),
                'image' => asset('images/administration/eee-head.jpg'),
                'name' => 'Md. Sanowar Hossain',
                'title' => 'Head of the Dept. EEE'
            ],
            [
                'route' => route('dept-head-ce'),
                'image' => asset('images/administration/ce-head.jpg'),
                'name' => 'Md. Rayhan Khan Apu',
                'title' => 'Head of the Dept. CE'
            ],
        ];
    }

    public function render()
    {
        return view('livewire.partials.home.administration');
    }
}
