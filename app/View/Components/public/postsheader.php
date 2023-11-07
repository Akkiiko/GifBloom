<?php

namespace App\View\Components\public;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class postsheader extends Component
{
    public $title;
    public $description;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function render(): View|Closure|string
    {
        return view('components.public.postsheader');
    }
}
