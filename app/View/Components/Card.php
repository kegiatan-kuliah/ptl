<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $footer;
    public $toolbar;
    public $title;
    public $containerClasses;
    public $headerClasses;
    public $bodyClasses;
    public $header;

    public function __construct($title = null, $footer = null, $toolbar = null, $containerClasses = [], $headerClasses = [], $bodyClasses = [], $header = null)
    {
        $this->title = $title;
        $this->footer = $footer;
        $this->toolbar = $toolbar;
        $this->containerClasses = $containerClasses;
        $this->headerClasses = $headerClasses;
        $this->bodyClasses = $bodyClasses;
        $this->header = $header;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
