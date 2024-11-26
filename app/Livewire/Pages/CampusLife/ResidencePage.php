<?php

namespace App\Livewire\Pages\CampusLife;

use Livewire\Component;

class ResidencePage extends Component
{
    public $images = [];

    public function mount()
    {
        $this->images = [
            [
                'src' => asset('images/hero-img.jpg'),
            ],
            [
                'src' => asset('images/hero-img1.jpg'),

            ],
            [
                'src' => asset('images/hero-bg2.jpg'),
            ]
        ];
    }
    public function render()
    {
        return view('livewire.pages.campus-life.residence-page');
    }
}
