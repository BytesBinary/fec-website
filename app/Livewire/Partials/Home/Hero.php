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
                'style' => 'absolute center',
                'button'=>'block;'
            ],
            [
                'src' => asset('images/hero-img1.jpg'),
                'title' => 'Where ambition meets opportunity',
                'description' => "In the Nation's Service and the Service of Humanity",
                'style' => 'absolute bottom-0 left-0 px-6 py-7 my-9',
                'button'=>'none;'
            ],
            [
                'src' => asset('images/hero-bg2.jpg'),
                'title' => 'The wind of freedom blows',
                'description' => 'Embrace the future of education',
                'style' => 'absolute bottom-0 left-0 px-6 py-7 my-5',
                'button'=>'none;'
            ]
        ];
    }
    public function render()
    {
        return view('livewire.partials.home.hero');
    }
}
