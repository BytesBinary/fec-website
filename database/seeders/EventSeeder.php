<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'basic_details' => [
                    'post_title' => 'TechnoFest 2025',
                    'short_description' => 'An exciting event in the tech industry.',
                    'registration_url' => 'https://event-registration.com',
                    'event_date' => '2025-07-15',
                    'event_location' => 'Tech Park, City Center',
                    'feature_image' => 'https://example.com/event-banner.jpg',
                ],
                'event_description' => 'TechnoFest 2025 is the premier technology festival featuring hackathons, robotics competitions, and keynote speeches from industry leaders.',
                'segments' => [
                    [
                        'segment_title' => 'AI Hands-on',
                        'segment_description' => 'A practical workshop on artificial intelligence applications.',
                    ],
                    [
                        'segment_title' => 'Blockchain Basics',
                        'segment_description' => 'Learn about decentralized finance and NFT technology.',
                    ],
                    [
                        'segment_title' => 'Cybersecurity in Action',
                        'segment_description' => 'Hands-on session covering the latest security threats.',
                    ],
                ],
                'contact_details' => [
                    'email' => 'events@techfest.com',
                    'phone' => '+1234567890',
                    'website' => 'https://techfest.com',
                ],
            ],
            [
                'basic_details' => [
                    'post_title' => 'AI & Machine Learning Conference',
                    'short_description' => 'A gathering of AI enthusiasts, researchers, and professionals.',
                    'registration_url' => 'https://aimlconference.com/register',
                    'event_date' => '2025-08-10',
                    'event_location' => 'Tech Innovation Hub, Silicon Valley',
                    'feature_image' => 'https://example.com/ai-ml-conference.jpg',
                ],
                'event_description' => 'A gathering of AI enthusiasts, researchers, and professionals to discuss the future of artificial intelligence and machine learning.',
                'segments' => [
                    [
                        'segment_title' => 'Neural Networks',
                        'segment_description' => 'Understanding deep learning and neural networks.',
                    ],
                    [
                        'segment_title' => 'AI Ethics',
                        'segment_description' => 'Discussing responsible AI and its ethical implications.',
                    ],
                ],
                'contact_details' => [
                    'email' => 'contact@aimlconference.com',
                    'phone' => '+1987654321',
                    'website' => 'https://aimlconference.com',
                ],
            ],
        ];

        foreach ($events as $eventData) {
            $event = Post::create([
                'post_title' => $eventData['basic_details']['post_title'],
                'post_type' => 'event',
                'post_category' => 'global',
                'post_content' => $eventData['event_description'],
                'post_author' => User::all()->random()->id,
                'post_slug' => create_unique_post_slug($eventData['basic_details']['post_title']),
                'post_status' => 'publish',
            ]);

            create_or_update_post_meta($event, 'event_details', $eventData['basic_details']);
            create_or_update_post_meta($event, 'event_segments', $eventData['segments']);
            create_or_update_post_meta($event, 'contact_details', $eventData['contact_details']);
        }



    }
}
// $event = Post::create([




//     'post_title' => $this->basic_details['post_title'],
//     'post_type' => 'event',
//     'post_category' => 'global',
//     'post_content' => $this->event_description,
//     'post_author' => Auth::user()->id,
//     'post_slug' => create_unique_post_slug($this->basic_details['post_title']),
//     'post_status' => 'publish',
// ]);

// create_or_update_post_meta($event, 'event_details', [
//     'short_description' => $this->basic_details['short_description'],
//     'registration_url' => $this->basic_details['registration_url'],
//     'event_date' => $this->basic_details['event_date'],
//     'event_location' => $this->basic_details['event_location'],
//     'feature_image' => $this->basic_details['feature_image'],
// ]);
// create_or_update_post_meta($event, 'event_segments', $this->segments);
// create_or_update_post_meta($event, 'contact_details', $this->contact_details);
