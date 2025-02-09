<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebsitePenduduk extends Component
{
    private mixed $data;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        global $data;
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website-penduduk', [
            'data' => $this->data,
        ]);
    }
}
