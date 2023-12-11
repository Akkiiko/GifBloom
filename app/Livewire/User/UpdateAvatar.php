<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Rule;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class UpdateAvatar extends Component
{
    use WithFileUploads;

    #[Rule('required|image|max:20482')]
    public $avatar;

    public function save()
    {
        $this->validate([
            'avatar' => 'required'
        ]);

        $path = $this->avatar->storePublicly('users', 'public');

        $user = auth()->user();
        $oldAvatar = $user->avatar;
        $user->avatar = "/storage/$path";
        $user->save();

        $oldAvatar = str_replace("/storage/", "", $oldAvatar);
        Storage::disk('public')->delete($oldAvatar);

        $this->avatar = null;
    }

    public function render()
    {
        return view('livewire.user.update-avatar');
    }
}
