<?php

namespace App\Livewire\Pages\CampusLife;

use Livewire\Component;
use Livewire\Attributes\Title;



class AllClubs extends Component
{
    #[Title('FEC | Clubs')]

    public function render()
    {
        $clubs = [
            [
                'title' => 'Research & Innovation Center',
                'short_des' => 'Join the Research & Innovation Center to explore cutting-edge technological advancements, participate in groundbreaking research, and innovate future solutions.',
                'image' => asset('images/club/ric.jpg'),
                'route' => 'ric',

            ],
            [
                'title' => 'FEC Cyber Protector Club',
                'short_des' => 'Learn and practice the latest in cybersecurity strategies, ethical hacking, and protection methodologies to keep digital spaces secure.',
                'image' => asset('images/card/cyber-protector.jpg'),
                'route' => 'feccpc',

            ],
            [
                'title' => 'FEC Sports Association',
                'short_des' => 'Embark on adventures, learn leadership, and engage in community service with the FEC Sports Association. Prepare yourself for real-life challenges.',
                'image' => asset('images/club/fecsa.jpg'),
                'route' => 'fecsa',

            ],
            [
                'title' => 'FEC Photographic Club',
                'short_des' => 'Capture moments and tell stories through the lens. Learn photography techniques and express your creative vision with the FEC Photographic Club.',
                'image' => asset('images/club/photography.jpg'),
                'route' => 'fecpc',

            ],
            [
                'title' => 'FEC Programming Club',
                'short_des' => 'Learn advanced programming skills and collaborate on innovative projects with the FEC Programming Club.',
                'image' => asset('images/club/programming.jpg'),
                'route' => 'fecpc2',

            ],
            [
                'title' => 'FEC Debating Club',
                'short_des' => 'Hone your public speaking skills, engage in competitive debates, and develop the ability to argue confidently with the FEC Debating Club.',
                'image' => asset('images/card/debate.jpg'),
                'route' => 'debating',

            ],
            [
                'title' => 'FEC Islamic Dawah and Research Center',
                'short_des' => 'Participate in research and educational activities centered on Islamic values and Dawah through the FEC Islamic Dawah and Research Center.',
                'image' => asset('images/club/fecrdc.jpg'),
                'route' => 'islamic-dawah',

            ],
            [
                'title' => 'FEC Bani Archana Committee',
                'short_des' => 'Collaborate and contribute to cultural activities and community events with the FEC Bani Archana Committee.',
                'image' => '#', // Update with correct image path if available
                'route' => 'bani-archana',

            ],
            [
                'title' => 'Club of Professionals',
                'short_des' => 'Connect with industry experts, attend professional development workshops, and prepare for a successful career with the FEC Professionals Club.',
                'image' => asset('images/club/professionals.jpg'),
                'route' => 'professionals',

            ],
            [
                'title' => 'FEC Rover Scout',
                'short_des' => 'Embark on adventures, learn leadership, and engage in community service with the FEC Rover Scout. Prepare yourself for real-life challenges.',
                'image' => asset('images/card/roverscout.jpg'),
                'route' => 'fecrsg',

            ],
        ];

        return view('livewire.pages.campus-life.all-clubs' , compact('clubs'));
    }
}
