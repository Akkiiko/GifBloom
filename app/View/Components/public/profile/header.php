<?php

namespace App\View\Components\public\profile;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components..public.profile.header');
    }
}
