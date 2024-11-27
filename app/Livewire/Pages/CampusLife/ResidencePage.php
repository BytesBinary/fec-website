<?php

namespace App\Livewire\Pages\CampusLife;

use App\Models\Post;
use Livewire\Component;

class ResidencePage extends Component
{
    public array $residence;
    public function mount($name)
    {
        $this->residence = Post::where('post_slug', $name)
            ->get()
            ->map(function ($data){
                $data->housing_details = get_post_meta($data->id, 'housing_details');
                $data->residence_slogan = get_post_meta($data->id, 'residence_slogan');
                $data->dining_schedule = get_post_meta($data->id, 'dining_schedule');
                $data->facilities = get_post_meta($data->id, 'facilities');
                $data->administration = get_post_meta($data->id, 'administration');

                return $data;
            })
            ->toArray();
        if( ! empty( $this->residence ) ) {
            $this->residence = current($this->residence);
        } else {
            return redirect()->route('residence-cafeteria');
        }
//        dd($this->residence);
    }

    public function render()
    {
        return view('livewire.pages.campus-life.residence-page');
    }
}
