<?php

namespace App\Livewire\Post;

use App\Models\Likes;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\Post as PostModel;

class PostList extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $search = ''; 

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

    #[On('filter-posts')] 
    public function search($search)
    {
        $this->search = $search;
        $this->resetPage(); 
    }

    public function render()
    {
        $query = PostModel::orderBy('created_at', 'desc');

        if ($this->search) {
            $query->where('title', 'like', '%' . $this->search['search'] . '%');

            $sortParts = explode(' ', $this->search['sort']);

            if(count($sortParts) == 2) {
                $query->reorder($sortParts[0], $sortParts[1]);
            }
        }

        $posts = $query->paginate($this->perPage);
        
        $userLikedPosts = Likes::where('user_id', auth()->id())
            ->pluck('post_id')
            ->all();

        return view('livewire.post.post-list', [
            'posts' => $posts,
            'userLikedPosts' => $userLikedPosts,
        ]);
    }
}
