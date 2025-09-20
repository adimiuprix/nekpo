<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class populers extends Component
{
    /**
     * Create a new component instance.
     */
    public $product;
    public $vendor;

    public function __construct($product, $vendor)
    {
        $this->product = $product;
        $this->vendor = $vendor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.populers');
    }
}
