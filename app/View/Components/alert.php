<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $data1;

    public function __construct($data1)
    {
        $this->data1 = $data1;
    }

    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
