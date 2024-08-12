<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContactPageCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( public $rowClassMd, public $rowClassLg, public $logoClass, public $title, public $description)
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact-page-card');
    }
}
