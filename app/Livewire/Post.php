<?php

namespace App\Livewire;

use App\Models\Likes;
use App\Models\Post as PostModel;
use Livewire\Component;

class Post extends Component
{
    public $post;

    public function toggleLike()
    {
        $like = Likes::where('user_id', auth()->id())
                ->where('post_id', $this->post->id)
                ->first();

        if ($like) {
            $like->delete();
            $this->post->decrement('likes');
        } else {
            $like = $this->post->likes()->create([
                'user_id' => auth()->id(),
            ]);
            $this->post->increment('likes');
        }
    }

    public function render()
    {        
        return view('livewire.post');
    }    
}
