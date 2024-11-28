<?php

namespace App\Livewire\Pages\Academics;

use Livewire\Attributes\Title;
use Livewire\Component;

class StudentStatistics extends Component
{
    public $statistics;

    #[Title('Student Statistics')]
    public function mount() {
        $this->statistics = array(
            [
                'title' => 'Total Enrollment',
                'value' => '8,500',
                'description' => 'Students enrolled this year',
            ],
            [
                'title' => 'Graduation Rate',
                'value' => '85%',
                'description' => 'Students graduating on time',
            ],
            [
                'title' => 'Course Completion',
                'value' => '92%',
                'description' => 'Average course completion rate',
            ],
            [
                'title' => 'Student-to-Faculty Ratio',
                'value' => '15:1',
                'description' => 'Average across departments',
            ],
            [
                'title' => 'Average GPA',
                'value' => '3.4',
                'description' => 'Overall GPA across all programs',
            ],
            [
                'title' => 'Research Publications',
                'value' => '300+',
                'description' => 'Published in the last year',
            ]);
    }
    public function render()
    {
        return view('livewire.pages.academics.student-statistics');
    }
}
