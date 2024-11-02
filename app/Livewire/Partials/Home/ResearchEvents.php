<?php

namespace App\Livewire\Partials\Home;

use Livewire\Component;

class ResearchEvents extends Component
{
    public $events = [];
    public $publications = [];
    public function mount(){
        $this->events = [
            [
                'image' => 'images/research/research.png',
                'title' => 'Hackathon 2024',
                'description' => 'Join the 48-hour coding marathon and showcase your programming skills with exciting prizes!',
                'date' => '2024-04-12 to 2024-04-14',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Robotics Symposium',
                'description' => 'Dive into the world of robotics with keynote speakers and innovative showcases.',
                'date' => '2024-06-08',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Advances in Electrical Engineering',
                'description' => 'A comprehensive session on recent advancements in electrical engineering and applications.',
                'date' => '2024-09-10',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Annual AI Conference',
                'description' => 'Explore the latest AI research and breakthroughs with leading experts in the field.',
                'date' => '2024-10-15 to 2024-10-17',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Sustainable Energy Workshop',
                'description' => 'Learn about sustainable energy solutions for a greener future with industry experts.',
                'date' => '2024-12-05',
                'url' => '#',
            ]
        ];

        $this->publications = [
            [
                'image' => 'images/research/research.png',
                'title' => 'The Future of Quantum Computing',
                'description' => 'An in-depth analysis of the advancements and future applications of quantum computing.',
                'date' => '2024-01-10',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Nanotechnology in Medical Science',
                'description' => 'Exploring the transformative potential of nanotechnology in diagnostics and treatment.',
                'date' => '2024-02-15',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Cybersecurity and Machine Learning',
                'description' => 'A comprehensive study on using AI to enhance cybersecurity measures.',
                'date' => '2024-03-22',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Innovations in Robotics Engineering',
                'description' => 'A report on groundbreaking innovations in robotics engineering.',
                'date' => '2024-04-05',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Artificial Intelligence in Healthcare',
                'description' => 'Assessing the impact of AI on healthcare systems and patient outcomes.',
                'date' => '2024-05-18',
                'url' => '#',
            ],
        ];
    }



    public function render()
    {
        return view('livewire.partials.home.research-events');
    }
}
