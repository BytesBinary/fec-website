<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $rowClass, $link, $image, $cardClass, $animation;
    public $imageUrl, $imageAlt, $imageClass, $cardTitle, $titleClass;
    public $bodyClass, $cardText, $textClass, $buttonUrl, $urlClass;
    public $buttonClass, $buttonText, $button, $cardConClass;
    public $cardlink, $cardLinkUrl, $cardLinkClass;
    public $cardLinkIcon, $cardUrlText, $customHtmlInCard;

    public function __construct( $cardConClass = "", $rowClass = 'col-sm-4', $link = false, $image = false, $button =false, $cardClass = 'card h-100 shadow-lg border-0 rounded-3', $animation = 'fade-up', $imageUrl = '', $imageAlt = 'Card image', $imageClass = 'card-img-top rounded-top', $cardTitle = 'Card Title', $titleClass = 'card-title mb-3 fw-bold', $bodyClass = 'card-body', $cardText = 'Card text', $textClass = 'card-text text-muted mb-4', $urlClass = '', $buttonClass = '', $buttonUrl = '', $buttonText = '', $cardlink = false, $cardLinkUrl = '', $cardLinkClass = '', $cardLinkIcon = '', $cardUrlText = '', $customHtmlInCard = '')
    {
        $this->rowClass = $rowClass ?: 'col-sm-4';
        $this->link = $link ?: false;
        $this->image = $image ?: false;
        $this->cardClass = $cardClass ?: 'card h-100 shadow-lg border-0 rounded-3';
        $this->animation = $animation ?: 'fade-up';
        $this->imageUrl = $imageUrl ?: '';
        $this->imageAlt = $imageAlt ?: 'Card image';
        $this->imageClass = $imageClass ?: 'card-img-top rounded-top';
        $this->cardTitle = $cardTitle ?: 'Card Title';
        $this->titleClass = $titleClass ?: 'card-title mb-3 fw-bold';
        $this->bodyClass = $bodyClass ?: 'card-body text-center';
        $this->cardText = $cardText ?: 'Card text';
        $this->textClass = $textClass ?: 'card-text text-muted mb-4';
        $this->button = $button ?: false;
        $this->buttonUrl = $buttonUrl ?: '';
        $this->buttonText = $buttonText ?: '';
        $this->urlClass = $urlClass ?: '';
        $this->buttonClass = $buttonClass ?: '';
        $this->cardlink = $cardlink ?: false;
        $this->cardLinkUrl = $cardLinkUrl ?: '';
        $this->cardLinkClass = $cardLinkClass ?: '';
        $this->cardLinkIcon = $cardLinkIcon ?: '';
        $this->cardUrlText = $cardUrlText ?: '';
        $this->customHtmlInCard = $customHtmlInCard ?: '';
        $this->cardConClass = $cardConClass ?: '';
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
