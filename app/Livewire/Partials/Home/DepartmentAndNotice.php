<?php

namespace App\Livewire\Partials\Home;

use DateTime;
use Livewire\Component;

class DepartmentAndNotice extends Component
{
    public $notices = [];

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
        $this->notices = [
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'academics/notice1.pdf',
                'date' => $this->getDayAndMonth('01 July 2023'),
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'academics/notice2.pdf',
                'date' => $this->getDayAndMonth('15 August 2023'),
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'academics/notice3.pdf',
                'date' => $this->getDayAndMonth('17 September 2023'),
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'academics/notice1.pdf',
                'date' => $this->getDayAndMonth('05 October 2023'),
            ],
            [
                'title' => '২০২৩-২০২৪ (জুলাই-ডিসেম্বর) শিক্ষাবর্ষে ইনস্টিটিউট অফ ইংলিশ এন্ড আধার ল্যাংগুয়েজ এ ভর্তি বিজ্ঞপ্তি',
                'pdf' => 'academics/notice2.pdf',
                'date' => $this->getDayAndMonth('20 November 2023'),
            ],
        ];

        return view('livewire.partials.home.department-and-notice',['notices' => $this->notices]);
    }
}
