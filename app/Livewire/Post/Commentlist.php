<?php

namespace App\Livewire\Post;

use Livewire\Component;
use App\Models\Comments;
use Livewire\Attributes\On; 

class CommentList extends Component
{
    public $comments;

    #[On('comment-created')] 
    public function updateCommentList($postId)
    {
        $this->comments = Comments::where('post_id', $postId)->get();
    }

    public function delete($id)
    {
        Comments::where('id', $id)->delete();

        $this->comments = Comments::where('post_id', $id)->get();
    }

    public function render()
    {
        return view('livewire.post.comment-list');
    }
}
