<?php

namespace App\Livewire\Partials\Home;

use DateTime;
use Livewire\Component;

class DepartmentAndNotice extends Component
{
    public $notices = [];

    public function mount()
    {

        $this->notices = [
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice1.pdf',
                'date' => '01 July 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice2.pdf',
                'date' => '15 August 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice3.pdf',
                'date' => '17 September 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice4.pdf',
                'date' => '05 October 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice5.pdf',
                'date' => '20 November 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice4.pdf',
                'date' => '05 October 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice5.pdf',
                'date' => '20 November 2023',
            ], [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice4.pdf',
                'date' => '05 October 2023',
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'notice5.pdf',
                'date' => '20 November 2023',
            ],
        ];
    }

    public function getDayAndMonth($date)
    {
        $dateObject = new DateTime($date);
        return [
            'day' => $dateObject->format('d'),
            'month' => $dateObject->format('F')
        ];
    }

    public function render()
    {
        return view('livewire.partials.home.department-and-notice');
    }
}
