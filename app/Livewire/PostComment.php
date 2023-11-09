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
        $data = $this->validate([
            'content' => 'required|string|min:3',
        ]);

        Comments::create([
            'content' => $this->content,
            'user_id' => auth()->user()->id,
            'post_id' => $id,
        ]);

        $this->content = '';

        return redirect()->route('view.post', ['post' => $id]); 
    }

    public function render()
    {
        return view('livewire.post-comment');
    }
}
