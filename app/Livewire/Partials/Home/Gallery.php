<?php

namespace App\Livewire\Partials\Home;

use Livewire\Component;

class Gallery extends Component
{
    public $galleries = [];

    public function mount()
    {
        $this->galleries = [
            [
                'src'=>'images/gallery/1.jpg'
            ],
            [
                'src'=>'images/gallery/2.jpg'
            ],
            [
                'src'=>'images/gallery/3.jpg'
            ],
            [
                'src'=>'images/gallery/4.jpg'
            ],
            [
                'src'=>'images/gallery/5.jpg'
            ],
            [
                'src'=>'images/gallery/6.jpg'
            ],
            [
                'src'=>'images/gallery/7.jpg'
            ],
            [
                'src'=>'images/gallery/8.jpg'
            ],
            [
                'src'=>'images/gallery/9.jpg'
            ],
            [
                'src'=>'images/gallery/10.jpg'
            ],
        ];
    }

    public function render()
    {
        return view('livewire.partials.home.gallery');
    }
}
