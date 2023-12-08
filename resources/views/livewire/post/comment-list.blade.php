<div>
    <p class="mb-4">{{ count($comments) }} Comments</p>

    <livewire:post.create-comment lazy.defer :id="$id" />

    @foreach ($comments->reverse() as $comment)
    <div class="comment br__8 mb-4">
        <div class="d-flex justify-content-between gap-3">
            <p class="comment__text post__description mb-3">“{{ $comment->content }}”</p>
            @auth
            @if($comment->user->id == Auth::user()->id)
            <form wire:confirm="Are you sure you want to delete this post?" wire:submit="delete({{ $comment->id }})">
                <button class="comment__delete"><img alt="Trash icon" src="{{ asset('/images/icons/trash.png') }}"></button>
            </form>
            @endif
            @endauth
        </div>

        <div class="d-flex justify-content-between">
            <div class="d-flex gap-2">
                <img src="{{ $comment->user->avatar }}" width="30" height="30" class="br__8">
                <a href="/profile/{{ $comment->user->username }}" class="comment__text post__title m-0">{{ $comment->user->username }}</a>
            </div>
            <p class="comment__text post__description m-0">{{ $comment->created_at->format('l jS F Y') }}</p>
        </div>
    </div>
    @endforeach
</div>
