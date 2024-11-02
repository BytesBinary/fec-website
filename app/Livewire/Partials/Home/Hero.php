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
                'description' => 'A Place to learn and Grow.',
                'style' => 'absolute',
            ],
            [
                'src' => asset('images/hero-img1.jpg'),
                'title' => 'Where ambition meets opportunity.',
                'description' => 'Join us in our journey.',
                'style' => 'absolute bottom-0 left-0 px-6 py-7 my-5'
            ],
            [
                'src' => asset('images/hero-bg2.jpg'),
                'title' => 'For the bold minds and boundless dreams',
                'description' => 'Embrace the future of education.',
                'style' => 'absolute bottom-0 left-0 px-6 py-7 my-5'
            ]
        ];
    }
    public function render()
    {
        return view('livewire.partials.home.hero');
    }
}
