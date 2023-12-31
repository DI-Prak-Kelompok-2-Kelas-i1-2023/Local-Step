<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class shoesCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $price,
        public float $stars
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.shoesCard');
    }
}
