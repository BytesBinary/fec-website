<?php

namespace App\Livewire\Partials\Department;

use Livewire\Component;

class Events extends Component
{
    public $department;
    public $dept;
    public $cardTitle,$cardDesc,$date,$img;
    public function mount($department)
    {
        $this->department = $department;
        switch($department){
            case 'cse':
                $this->dept='Computer Science and Engineering';
                $this->img='images/bg-image.jpg';
                $this->cardTitle='Tech Innovation Conference 2024';
                $this->cardDesc='Join us for a conference featuring keynote speakers and innovators in the tech industry.';
                $this->date='March 5, 2024';
                break;
            case 'eee':
                $this->dept='Electrical and Electronics Engineering';
                $this->img='https://via.placeholder.com/400x250';
                $this->cardTitle='Tech Innovation Conference 2024';
                $this->cardDesc='Join us for a conference featuring keynote speakers and innovators in the tech industry.';
                $this->date='March 5, 2024';
                break;
            case 'ce':
                $this->dept='Civil Engineering';
                $this->img='https://via.placeholder.com/400x250';
                $this->cardTitle='Tech Innovation Conference 2024';
                $this->cardDesc='Join us for a conference featuring keynote speakers and innovators in the tech industry.';
                $this->date='March 5, 2024';
                break;
            default:
                break;
        }
    }
    public function render()
    {
        return view('livewire.partials.department.events')
            ->layout('components.layouts.sub-page', get_sub_page_layout_data('department',$this->department));
    }
}
