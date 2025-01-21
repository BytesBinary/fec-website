<?php

namespace App\Livewire\Partials\Home;

use App\Models\Options;
use Illuminate\Support\Str;
use Livewire\Component;

class ShortDetails extends Component
{
    public $details = [];

    public function render()
    {
        $this->details = Options::where('option_type', 'short-details')
        ->get()
        ->map(function ($option) {
            if($option->option_name === 'established_year'){
                $option->logo = 'images/establish.png';
            } else if( $option->option_name === 'total_students' ){
                $option->logo = 'images/students.png';
            } else if( $option->option_name === 'total_departments' ){
                $option->logo = 'images/building.png';
            } else if( $option->option_name === 'faculty_members' ){
                $option->logo = 'images/faculty-members.png';
            }

            $option->title = Str::replace('_', ' ', Str::title($option->option_name));

            return $option;
        });
        return view('livewire.partials.home.short-details',['details' => $this->details]);
    }
}
