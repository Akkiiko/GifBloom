<?php

namespace App\Livewire\Post;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use App\Models\Post as PostModel;
use Illuminate\Support\Facades\Auth;

class CreatePost extends Component
{
    use WithFileUploads;

    #[Rule('required|image|max:20482')]
    public $photo;
    public $title = '';
    public $content = '';

    public function save()
    {
        $this->validate([ 
            'title' => 'required|min:3|string',
            'content' => 'required|min:3|string',
            'photo' => 'required'
        ]);

        $path = $this->photo->storePublicly('thumbnails', 'public');

        PostModel::create([
            'title' => $this->title,
            'content' => $this->content,
            'thumbnail' => $path,
            'tags' => "hi",
            'user_id' => Auth::id(),
        ]);

        $this->title = '';
        $this->photo = null;
        $this->content = '';

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.post.create-post');
    }
}
