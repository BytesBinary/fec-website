<?php

namespace App\Livewire\Partials\Home;

use Livewire\Component;

class ShortDetails extends Component
{
    public $details = [];
    public function mount()
    {
        $this->details = array(
            [
                'name' => 'Established',
                'url' => 'images/establish.png',
                'number' => '2010',
            ],
            [
                'name' => 'Students',
                'url' => 'images/students.png',
                'number' => '800',
            ],
            [
                'name' => 'Departments',
                'url' => 'images/building.png',
                'number' => '3',
            ],
            [
                'name' => 'Faculty Members',
                'url' => 'images/faculty-members.png',
                'number' => '30',
            ]
        );
    }
    public function render()
    {
        return view('livewire.partials.home.short-details');
    }
}
