<?php

namespace App\Livewire\Pages\CampusLife;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;


#[Title('FEC | Residence')]
class ResidenceCafeteria extends Component
{
    public array $residences;

    public function render()
    {
        $this->residences = Post::where('post_type', 'residence')
        ->get()
        ->map(function ($data){
            $data->slogan = get_post_meta($data->id,'residence_slogan');
            return $data;
        })
        ->toArray();
        return view('livewire.pages.campus-life.residence-cafeteria', ['residences'=>$this->residences]);
    }
}
