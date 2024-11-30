<?php

namespace App\Livewire\Partials\Home;

use Livewire\Component;

class ResearchEvents extends Component
{
    public $events = [];
    public $researches = [];
    public function mount(){
        $this->events = [
            [
                'image' => 'images/research/research.png',
                'title' => 'Hackathon 2024',
                'location' => 'TechHub, Downtown, City',
                'date' => '10 JANUARY 2025',
                'url' => route('event', ['slug' => 'hackathon-2024']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Robotics Symposium',
                'location' => 'Innovation Park, Silicon Valley',
                'date' => '12 FEBRUARY 2025',
                'url' => route('event', ['slug' => 'robotics-symposium']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Advances in Electrical Engineering',
                'location' => 'Engineering Hall, University of Tech',
                'date' => '18 MARCH 2025',
                'url' => route('event', ['slug' => 'advances-in-electrical-engineering']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Annual AI Conference',
                'location' => 'AI Research Center, City University',
                'date' => '25 APRIL 2025',
                'url' => route('event', ['slug' => 'annual-ai-conference']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Sustainable Energy Workshop',
                'location' => 'GreenTech Center, Downtown',
                'date' => '30 MAY 2025',
                'url' => route('event', ['slug' => 'sustainable-energy-workshop']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Quantum Computing Summit',
                'location' => 'QuantumLab, New York',
                'date' => '15 JUNE 2025',
                'url' => route('event', ['slug' => 'quantum-computing-summit']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Blockchain Expo 2025',
                'location' => 'Blockchain Hall, London',
                'date' => '5 JULY 2025',
                'url' => route('event', ['slug' => 'blockchain-expo']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Cybersecurity Conference 2025',
                'location' => 'CyberSec Arena, Berlin',
                'date' => '20 AUGUST 2025',
                'url' => route('event', ['slug' => 'cybersecurity-conference']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Mobile App Development Bootcamp',
                'location' => 'DevZone, Los Angeles',
                'date' => '10 SEPTEMBER 2025',
                'url' => route('event', ['slug' => 'mobile-app-development']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Tech for Good Summit',
                'location' => 'TechPark, San Francisco',
                'date' => '22 OCTOBER 2025',
                'url' => route('event', ['slug' => 'tech-for-good']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Artificial Intelligence in Healthcare',
                'location' => 'MedTech Forum, Boston',
                'date' => '11 NOVEMBER 2025',
                'url' => route('event', ['slug' => 'ai-in-healthcare']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Cloud Computing Conference',
                'location' => 'CloudWorld, Sydney',
                'date' => '19 DECEMBER 2025',
                'url' => route('event', ['slug' => 'cloud-computing-conference']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Science Fair',
                'location' => 'Expo Center, City Square',
                'date' => '15 JANUARY 2025',
                'url' => route('event', ['slug' => 'science-fair']),
            ],
        ];



        $this->researches = [
            [
                'image' => 'images/research/research.png',
                'title' => 'The Future of Quantum Computing',
                'description' => 'An in-depth analysis of the advancements and future applications of quantum computing.',
                'date' => '2024-01-10',
                'url' => route('single-research', ['name' => 'demo']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Nanotechnology in Medical Science',
                'description' => 'Exploring the transformative potential of nanotechnology in diagnostics and treatment.',
                'date' => '2024-02-15',
                'url' => route('single-research', ['name' => 'demo']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Cybersecurity and Machine Learning',
                'description' => 'A comprehensive study on using AI to enhance cybersecurity measures.',
                'date' => '2024-03-22',
                'url' => route('single-research', ['name' => 'demo']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Innovations in Robotics Engineering',
                'description' => 'A report on groundbreaking innovations in robotics engineering.',
                'date' => '2024-04-05',
                'url' => route('single-research', ['name' => 'demo']),
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Artificial Intelligence in Healthcare',
                'description' => 'Assessing the impact of AI on healthcare systems and patient outcomes.',
                'date' => '2024-05-18',
                'url' => route('single-research', ['name' => 'demo']),
            ],
        ];
    }



    public function render()
    {
        return view('livewire.partials.home.research-events');
    }
}
