<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputText extends Component
{
    public $type;
    public $name;
    public $id;
    public $classes;
    public $placeholder;

    public function __construct($name, $type = 'text', $id = null, $classes = [], $placeholder = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->classes = $classes;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-text');
    }
}
