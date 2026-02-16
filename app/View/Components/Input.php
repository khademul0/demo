<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    
    public $name;
    
    public $lable;

    public function __construct($type,$name,$lable)
    {
        $this->type=$type;
        $this->name=$name;
        $this->lable=$lable;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
