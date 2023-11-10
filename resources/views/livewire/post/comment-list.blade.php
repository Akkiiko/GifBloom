<div>
    @foreach ($comments->reverse() as $comment)
    <div class="comment br__8 mb-4">
        <p class="comment__text post__description mb-3">“{{ $comment->content }}”</p>
        
        <div class="d-flex justify-content-between">
            <div class="d-flex gap-2">
                <img src="{{ $comment->user->avatar }}" width="30" height="30" class="br__8">
                <p class="comment__text post__title m-0">{{ $comment->user->username }}</p>
            </div>
            <p class="comment__text post__description m-0">{{ $comment->created_at->format('l jS F Y') }}</p>
        </div>
    </div>
    @endforeach
</div>
