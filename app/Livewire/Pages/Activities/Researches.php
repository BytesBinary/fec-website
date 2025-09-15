<?php

namespace App\Livewire\Pages\Activities;

use Livewire\Component;
use Livewire\Attributes\Title;

class Researches extends Component
{
    #[Title('FEC | Reasearches')]

    public function render()
    {
        $researches =[
            [
                'image'=>'',
                'title'=>'Sustainable Energy Solutions',
                'description'=>'Investigating renewable energy sources to support a sustainable future.',
                'date'=>'2024-10-05',
                'url'=>'demo',
            ],
            [
                'image'=>'',
                'title'=>'Quantum Computing Innovations',
                'description'=>'Pioneering advancements in quantum computing and its applications',
                'date'=>'2024-09-20',
                'url'=>'demo',
            ],
            [
                'image'=>'',
                'title'=>'Artificial Intelligence in Education',
                'description'=>'Exploring the potential of AI to revolutionize educational systems.',
                'date'=>'2024-08-30',
                'url'=>'demo',
            ],
        ];
        return view('livewire.pages.activities.researches', compact('researches'));
    }
}
