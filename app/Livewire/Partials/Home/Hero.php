<?php

namespace App\Livewire\Partials\Home;

use Livewire\Component;

class Hero extends Component
{
    public $image = [];

    public function render()
    {
        $this->image = [
            'src' => asset('images/hero-img1.jpg'),
            'title' => 'Welcome to Faridpur Engineering College',
            'description' => 'A Place to learn and Grow.',
            'style' => 'absolute',
        ];

        return view('livewire.partials.home.hero', ['image' => $this->image]);
    }
}
