<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    public $method;
    public $action;
    public $classes;

    public function __construct($method, $action, $classes = [])
    {
        $this->method = $method;
        $this->action = $action;
        $this->classes = $classes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
