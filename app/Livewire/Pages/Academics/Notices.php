<?php

namespace App\Livewire\Pages\Academics;

use Livewire\Attributes\Title;
use Livewire\Component;

class Notices extends Component
{
    public $notices = [];
    public $currentTitle;
    public $currentPdf;
    #[Title('Notices')]
    public function mount()
    {
        $this->notices = [
            [
                'title' => 'Notice 1',
                'pdf' => 'notice1.pdf',
                'date' => '12 November 2024',
            ],
            [
                'title' => 'Notice 2',
                'pdf' => 'notice2.pdf',
                'date' => '12 October 2024',
            ],
            [
                'title' => 'Notice 3',
                'pdf' => 'notice3.pdf',
                'date' => '12 September 2024',
            ],
        ];

        $this->currentTitle = $this->notices[0]['title'];
        $this->currentPdf = $this->notices[0]['pdf'];
    }
    public function changeNotice($notice)
    {
        $this->currentTitle = $notice['title'];
        $this->currentPdf = $notice['pdf'];
    }
    public function render()
    {
        return view('livewire.pages.academics.notices');
    }
}
