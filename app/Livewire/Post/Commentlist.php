<?php

namespace App\Livewire\Post;

use Livewire\Component;
use App\Models\Comments;
use Livewire\Attributes\On; 

class Commentlist extends Component
{
    public $comments;

    #[On('comment-created')] 
    public function updateCommentList($postId)
    {
        $this->comments = Comments::where('post_id', $postId)->get();
    }

    public function render()
    {
        return view('livewire.post.commentlist');
    }
}
