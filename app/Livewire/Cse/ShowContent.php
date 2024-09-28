<?php

namespace App\Livewire\Cse;

use Livewire\Component;

class ShowContent extends Component
{
    public $content = 'partials.cse.welcome';

    public $availableContents = [
        'message-from-head' => 'partials.cse.message-from-head',
        'biography' => 'partials.cse.biography',
        'edu-background' => 'partials.cse.edu-background',
        'faculty-members' => 'partials.cse.faculty-members',
        'officer' => 'partials.cse.officer',
        'students' => 'partials.cse.students',
        'incourse' => 'partials.cse.incourse',
        'semester-final' => 'partials.cse.semester-final',
        'semester-plan' => 'partials.cse.semester-plan',
    ];

    protected $listeners = ['changeContent'];

    public function changeContent($contentKey)
    {
        if (isset($this->availableContents[$contentKey])) {
            $this->content = $this->availableContents[$contentKey];
        }
    }


    public function render()
    {
        return view('livewire.cse.show-content');
    }
}
