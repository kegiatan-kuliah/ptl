<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $variant;
    public $color;
    public $type;

    public function __construct($variant = 'block', $color = 'primary', $type = 'button')
    {
        $this->variant = $variant;
        $this->color = $color;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
