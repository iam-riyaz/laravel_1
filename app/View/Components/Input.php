<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{


    public $type;
    public $name;
    public $label;
    public $variable;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$name,$label, $variable="default")
    {
        $this->type=$type;
        $this->name=$name;
        $this->label=$label;
        $this->variable=$variable;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
