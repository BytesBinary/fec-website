<?php

namespace App\Livewire\Partials\Department;

use Livewire\Component;

class Gallery extends Component
{
    public $department;
    public $dept;
    public $img1,$img2,$img3,$img4,$img5,$img6;
    public function mount($department){
        $this->department = $department;
        switch($department){
            case 'cse':
                $this->dept='Computer Science and Engineering';
                $this->img1='images/bg-image.jpg';
                $this->img2='';
                $this->img3='';
                $this->img4='';
                $this->img5='';
                $this->img6='';
                break;
            case 'eee':
                $this->dept='Electrical and Electronics Engineering';
                $this->img1='';
                $this->img2='';
                $this->img3='';
                $this->img4='';
                $this->img5='';
                $this->img6='';
                break;
            case 'ce':
                $this->dept='Civil Engineering';
                $this->img1='';
                $this->img2='';
                $this->img3='';
                $this->img4='';
                $this->img5='';
                $this->img6='';
                break;
            default:
                break;
        }
    }
    public function render()
    {
        return view('livewire.partials.department.gallery')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department', $this->department));
    }
}
