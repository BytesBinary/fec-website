<?php

namespace App\Livewire\Partials\Department;

use Livewire\Component;

class Gallery extends Component
{
    public $department;
    public $dept;
    public array $img;

    public function render()
    {
        $this->department = request()->route('department');
        switch($this->department){
            case 'cse':
                $this->dept='Computer Science and Engineering';
                $this->img=[
                        'Event - 1' => 'images/bg-image.jpg',
                    ];
                break;
            case 'eee':
                $this->dept='Electrical and Electronics Engineering';
                $this->img=[
                       'Event - 1' => 'images/bg-image.jpg',
                ];
                break;
            case 'ce':
                $this->dept='Civil Engineering';
                $this->img=[
                    'Event - 1' => 'images/bg-image.jpg',
                ];
                break;
            default:
                break;
        }
        return view('livewire.partials.department.gallery', ['img' => $this->img])
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department', $this->department));
    }
}
