<?php

namespace App\Livewire\Pages\CampusLife;

use Livewire\Component;



class AllClubs extends Component
{
    public $clubs = [];
    public function mount()
    {
        $this->clubs = [
            [
                'title'     => 'Research & Innovation Center',
                'image'     => 'images/club/ric.jpg',
                'short_des' => 'Join the Research & Innovation Center to explore cutting-edge technological advancements,participate in groundbreaking research, and innovate future solutions.',
                'route' => 'fecric'
            ],
            [
                'title'     => 'FEC Cyber Protector Club',
                'image'     => 'images/club/ric.jpg',
                'short_des' => 'Learn and practice the latest in cybersecurity strategies, ethical hacking, and protection methodologies to keep digital spaces secure.',
                'route' => 'feccpc'

            ],
            [
                'title'     => 'FEC Sports Association',
                'image'     => 'images/club/fecsa.jpg',
                'short_des' => ' Embark on adventures, learn leadership, and engage in community service with the FEC Sports Association. Prepare yourself for real-life challenges.',
                'route' => 'fecsa'
            ],
            [
                'title'     => 'FEC Photographic Club',
                'image'     => 'images/club/photography.jpg',
                'short_des' => 'Capture moments and tell stories through the lens. Learn photography techniques and express your creaive vision with the FEC Photographic Club.',
                'route' => 'fecpc'
            ]
        ];
    }


    public function render()
    {
        // dd($this->clubs);
        return view('livewire.pages.campus-life.all-clubs');
    }
}
