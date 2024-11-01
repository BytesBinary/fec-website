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
            [
                'image' => 'images/research/research.png',
                'title' => 'Renewable Energy Solutions for Urban Areas',
                'description' => 'Studies on the adaptation of renewable energy in densely populated areas.',
                'date' => '2024-06-30',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Genetic Engineering and Agriculture',
                'description' => 'The role of genetic engineering in creating sustainable agriculture.',
                'date' => '2024-07-12',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Sustainable Manufacturing Practices',
                'description' => 'A review of sustainable practices in modern manufacturing.',
                'date' => '2024-08-21',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Data Science and Predictive Analytics',
                'description' => 'Insights into predictive analytics and its application in various industries.',
                'date' => '2024-09-03',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Environmental Science and Climate Change',
                'description' => 'Addressing the challenges of climate change through environmental science.',
                'date' => '2024-10-14',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Advances in Neuroscience',
                'description' => 'A study on the latest advancements in neuroscience and its implications.',
                'date' => '2024-11-20',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Biotechnology and Its Future',
                'description' => 'Future prospects of biotechnology in healthcare and agriculture.',
                'date' => '2024-12-01',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Solar Energy and Power Grids',
                'description' => 'An analysis of solar energy integration into modern power grids.',
                'date' => '2025-01-10',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'Machine Learning Algorithms for Big Data',
                'description' => 'Exploring efficient machine learning algorithms for handling big data.',
                'date' => '2025-02-17',
                'url' => '#',
            ],
            [
                'image' => 'images/research/research.png',
                'title' => 'New Discoveries in Astronomy',
                'description' => 'Research on the latest discoveries and advancements in astronomy.',
                'date' => '2025-03-23',
                'url' => '#',
            ]
        ];
    }



    public function render()
    {
        return view('livewire.partials.home.research-events');
    }
}
