<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comments;

class PostComment extends Component
{
    public $content = '';
    public $id;

    public function save($id)
    {
        $this->validate([
            'content' => 'required|string|min:3',
        ]);

        Comments::create([
            'content' => $this->content,
            'user_id' => auth()->user()->id,
            'post_id' => $id,
        ]);

        $this->content = '';

        $this->dispatch('comment-created', postId: $id);
    }

    public function render()
    {
        return view('livewire.post-comment');
    }
}
