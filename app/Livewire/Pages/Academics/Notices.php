<?php

namespace App\Livewire\Pages\Academics;

use Livewire\Attributes\Title;
use Livewire\Component;

class Notices extends Component
{
    public $notices = [];
    public $currentTitle;
    public $currentPdf;
    #[Title('FEC | Notices')]
    public function mount()
    {
        $this->notices = [
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice1.pdf',
                'path' => 'academics/notice1.pdf',
                'date' => '01 July 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice2.pdf',
                'path' => 'academics/notice1.pdf',
                'date' => '15 August 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice3.pdf',
                'path' => 'academics/notice1.pdf',
                'date' => '17 September 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice1.pdf',
                'path' => 'academics/notice1.pdf',
                'date' => '05 October 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice1.pdf',
                'path' => 'academics/notice1.pdf',
                'date' => '20 November 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice1.pdf',
                'path' => 'academics/notice1.pdf',
                'date' => '05 October 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice1.pdf',
                'path' => 'academics/notice1.pdf',
                'date' => '20 November 2023',
            ], [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice1.pdf',
                'path' => 'academics/notice1.pdf',
                'date' => '05 October 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice1.pdf',
                'path' => 'academics/notice1.pdf',
                'date' => '20 November 2023',
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
