<?php

namespace App\Livewire\Pages\Academics;

use Livewire\Component;
use Livewire\Attributes\Title;

class StudentStatistics extends Component
{
    #[Title('Student Statistics')]

    public function render()
    {
        return view('livewire.pages.academics.student-statistics');
    }
}
