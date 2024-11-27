<?php

namespace App\Livewire\Pages\Activities;

use Livewire\Component;

class EventPage extends Component
{

    public $eventDetails;
    public $categories;
    public $segments;
    public $contacts;
    public $eventDateTime;
    public $eventLocation;
    public $calendarLink;
    public $mapLink;

    public function mount()
    {
        $this->eventDetails = [
            'title' => 'Tech Innovators Summit 2025',
            'subtitle' => 'Innovating the Future Together',
            'date' => 'Saturday, Nov 25, 2025 | 9:00 AM - 6:00 PM',
            'location' => 'Grand Tech Hall, Innovation Avenue, Silicon Valley',
            'motto' => '"Empowering Innovators for a Sustainable Tomorrow"',
            'about' => 'Join us for the Tech Innovators Summit 2025, the ultimate gathering of innovators, entrepreneurs, and thought leaders dedicated to shaping the future of technology. This premier event is a unique opportunity to immerse yourself in a world of cutting-edge ideas and transformative breakthroughs. With a lineup of visionary keynotes, hands-on workshops, and interactive panel discussions, you’ll gain insights into emerging trends, disruptive technologies, and strategies to stay ahead in a fast-paced digital landscape.
            Join us for the Tech Innovators Summit 2025, the ultimate gathering of innovators, entrepreneurs, and thought leaders dedicated to shaping the future of technology. This premier event is a unique opportunity to immerse yourself in a world of cutting-edge ideas and transformative breakthroughs. With a lineup of visionary keynotes, hands-on workshops, and interactive panel discussions, you’ll gain insights into emerging trends, disruptive technologies, and strategies to stay ahead in a fast-paced digital landscape.
            '
        ];

        $this->categories = [
            'High School (Grades IX - XII)',
            'Undergraduate Students',
            'Industry Professionals',
            'Tech Enthusiasts'
        ];

        $this->segments = [
            ['title' => 'Tech Exhibition', 'description' => 'Innovative projects from various industries.'],
            ['title' => 'AI & Robotics Competition', 'description' => 'Pioneering challenges for future tech leaders.'],
            ['title' => 'Startup Pitch Fest', 'description' => 'Pitch your idea to a panel of top investors.'],
            ['title' => 'Tech Talks', 'description' => 'Inspiring talks by industry leaders.'],
            ['title' => 'Hackathon', 'description' => 'Solve real-world challenges within a time limit.'],
            ['title' => 'Coding Challenges', 'description' => 'Compete with the best coders in thrilling challenges.'],
        ];

        $this->contacts = [
            [
                'name' => 'Alex Morgan',
                'role' => 'Event Manager',
                'email' => 'alexmorgan@techsummit.com',
                'phone' => '+1 234-567-890',
                'whatsapp' => 'https://wa.me/1234567890',
                'image' => 'images/BytesBinary.png',
            ],
            [
                'name' => 'Bytes & Binary',
                'role' => 'Primary Host',
                'email' => 'bytesbinary@techsummit.com',
                'phone' => '+1 222-333-444',
                'whatsapp' => '',
                'image' => 'images/BytesBinary.png',
            ]
        ];
        $this->eventDateTime = 'Saturday, Nov 25, 2025 | 9:00 AM - 6:00 PM';
        $this->eventLocation = 'Grand Tech Hall, Innovation Avenue, Silicon Valley';
        $this->calendarLink = 'calendar-link'; // Replace with actual link
        $this->mapLink = 'map-link';
    }


    // public string $slug;
    // public function mount($slug)
    // {
    //     $this->slug = $slug;
    // }

    public function render()
    {
        return view('livewire.pages.activities.event-page');
    }
}
