<?php

namespace App\Livewire\Partials\Department;

use Illuminate\Support\Str;
use Livewire\Component;

class About extends Component
{
    public $department;
    public $cardTitle;
    public function mount($department )
    {
        $this->department = $department;
        switch($department) {
            case 'cse':
                $this->cardTitle = 'Computer Science And Engineering';
                break;
            case 'eee':
                $this->cardTitle = 'Electrical & Electronics Engineering';
                break;
            case 'ce':
                $this->cardTitle = 'Civil Engineering';
                break;
            default:
                break;
        }

    }



    public function render()
    {
        return view('livewire.partials.department.about')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department',$this->department));
    }
}
