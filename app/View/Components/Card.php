<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public function __construct(public $rowClass, public $link, public $cardClass, public $animation, public $imageUrl, public $imageAlt, public $imageClass, public $cardTitle, public $titleClass, public $bodyClass, public $cardText, public $textClass)
    {

    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
