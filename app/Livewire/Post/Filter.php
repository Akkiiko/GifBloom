<?php

namespace App\Livewire\Post;

use Livewire\Component;

class Filter extends Component
{
    public $search = '';
    public $sort = '';

    public function filterPosts()
    {
        $this->dispatch('filter-posts', [
            'search' => $this->search,
            'sort' => $this->sort,
        ]);
    }

    public function render()
    {
        return view('livewire.post.filter');
    }
}
