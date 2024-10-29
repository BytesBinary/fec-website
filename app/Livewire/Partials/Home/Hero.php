<?php

namespace App\Livewire\Partials\Home;

use Livewire\Component;

class Hero extends Component
{
    public $images = [];

    public function mount()
    {
        $this->images = [
            [
                'src' => asset('images/hero-img.jpg'),
                'title' => 'Welcome to Faridpur Engineering College',
                'description' => 'A Place to learn and Grow.'
            ],
            [
                'src' => asset('images/hero-img1.jpg'),
                'title' => 'Explore New Opportunities',
                'description' => 'Join us in our journey.'
            ],
            [
                'src' => asset('images/hero-bg2.jpg'),
                'title' => 'Innovative Learning',
                'description' => 'Embrace the future of education.'
            ]
        ];
    }
    public function render()
    {
        return view('livewire.partials.home.hero');
    }
}
