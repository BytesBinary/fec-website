<?php

namespace App\Livewire\Partials\Department;

use Illuminate\Support\Str;
use Livewire\Component;

class About extends Component
{
    public $department;
    public $cardTitle;
    public $dept;
    public $deptDesc;
    public $mail;
    public $phone;
    public $img;
    public $l1,$l2,$l3,$l4,$l5;
    public function mount($department )
    {
        $this->department = $department;
        switch($department) {
            case 'cse':
                $this->cardTitle = 'Computer Science And Engineering';
                $this->dept = 'CSE';
                $this -> deptDesc = 'Computer Science Engineering is an engineering course that involves several computer science aspects essential for the creation of the computer system. It is a four-year undergraduate engineering course wherein students study computer software & hardware for theoretical & practical knowledge.';
                $this->mail = 'head.cse@fec.ac.bd';
                $this->phone = '+8801788844430';
                $this->l1='Computer Architecture & Organization';
                $this->l2='Cloud Computing';
                $this->l3='Operating Systems & Compiler Design';
                $this->l4='Design & Analysis of Algorithms';
                $this->l5='Data Structures and Algorithm';
                $this->img='https://anjaneyauniversity.ac.in/blog/wp-content/uploads/2023/08/wepik-export-20230808104826aZeq.jpeg';
                break;
            case 'eee':
                $this->cardTitle = 'Electrical & Electronics Engineering';
                $this->dept='EEE';
                $this->deptDesc='Electrical and Electronics Engineering is an engineering discipline that deals with Electrical and Machine technology, Electrons, Circuit analysis, Electromagnetism, Instrumentations, Materials for Electrical Engineering, Control systems, Transmission and Distribution, and Power engineering.';
                $this->mail='head.eee@fec.ac.bd';
                $this->phone='+88001716589997';
                $this->l1='Power systems';
                $this->l2='Control systems';
                $this->l3='Signals and systems';
                $this->l4='Electrical machines';
                $this->l5='Microprocessors';
                $this->img='https://set.jainuniversity.ac.in/uploads/blog/eee-engineering-full-form.jpg';
                break;
            case 'ce':
                $this->cardTitle = 'Civil Engineering';
                $this->dept='CE';
                $this->deptDesc='Civil engineers design, build, and maintain the foundation for our modern society – our buildings, roads and bridges, drinking water and energy systems, sea ports and airports, and the infrastructure for a cleaner environment, to name just a few.';
                $this->mail='head.ce@fec.ac.bd';
                $this->phone='+8801819425553';
                $this->l1='Engineering drawing';
                $this->l2='Environmental engineering';
                $this->l3='Structural engineering';
                $this->l4='Surveying';
                $this->l5='Construction Management';
                $this->img='https://www.dreamdesigninc.com/wp-content/uploads/2022/09/civilengineering_hero.jpg';
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
