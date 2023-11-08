<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $post;
    public $isLiked = false;

    public function mount($post)
    {
        $this->post = $post;

    }

    public function toggleLike()
    {
        $this->isLiked = !$this->isLiked;
    }

    public function render()
    {
        return view('livewire.post');
    }
}
