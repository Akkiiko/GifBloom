<?php

namespace App\Livewire;

use App\Models\Likes;
use App\Models\Post as PostModel;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;
    public $perPage = 5;

    public function toggleLike(PostModel $post)
    {
        $like = Likes::where('user_id', auth()->id())
                ->where('post_id', $post->id)
                ->first();

        if ($like) {
            $like->delete();
            $post->decrement('likes');
        } else {
            $like = $post->likes()->create([
                'user_id' => auth()->id(),
            ]);
            $post->increment('likes');
        }
    }

    public function loadMore()
    {
        $this->perPage += 5;
    }

    public function render()
    {        
        $posts = PostModel::orderBy('created_at', 'desc')->paginate($this->perPage);
        $userLikedPosts = Likes::where('user_id', auth()->id())
        ->pluck('post_id')
        ->all();

        return view('livewire.postList', [
            'posts' => $posts,
            'userLikedPosts' => $userLikedPosts
        ]);
    }
}
