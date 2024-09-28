<?php

namespace App\Livewire;

use Livewire\Component;

class DepartmentPage extends Component
{
    public $content = 'partials.cse.welcome';

    public $availableContents = [
       'head' => 'partials.cse.message-from-head',
       'biography' => 'partials.cse.biography',
       'background' => 'partials.cse.edu-background',
       'faculty-members' => 'partials.cse.faculty-members',
       'officer' => 'partials.cse.officer',
       'students' => 'partials.cse.students',
       'incourse' => 'partials.cse.incourse',
       'semester-final' => 'partials.cse.semester-final',
       'semester-plan' => 'partials.cse.semester-plan',
   ];

    public function change($name = '')
    {
        $this->content = $this->availableContents[$name];
    }

    public function render()
    {
        return view('livewire.department-page');
    }
}
