<div>
    @foreach($posts as $post)
    <a href="{{ route('view.post', $post) }}">
        <div class="post__container mb-4">
            <div class="post__thumbnail mb-4" style="background: linear-gradient(0deg, rgba(33, 33, 33, 0.85) 0%, rgba(33, 33, 33, 0.85) 100%), url('{{ $post->thumbnail }}'); background-repeat: no-repeat; background-size: cover; background-position-y: 50%;">
                <img alt="{user}'s image of {title}" class="h-100" src="{{ $post->thumbnail }}">
            </div>
        
            <div class="d-flex justify-content-between">
                <div>
                    <div class="d-flex gap-2">
                        <p class="post__tag">#tokyo</p>
                        <p class="post__tag">#japan</p>
                        <p class="post__tag">#photograph</p>
                    </div>
                
                    <p class="post__title">{{ $post->title }}</p>
                    <p class="post__description">{{ $post->content }}</p>
                </div>
                
                <div class="text-center">
                    <a class="pointer" @auth wire:click="toggleLike({{$post}})" @else data-bs-toggle="modal" data-bs-target="#loginModal" @endauth>
                        @if (in_array($post->id, $userLikedPosts))
                            <img alt="Like icon" src="/images/icons/liked.png">
                        @else
                            <img alt="Like icon" src="/images/icons/unliked.png">
                        @endif
                    </button>
                    <p class="like__count">{{ $post->likes }}</p>
                    </a>
                </div>
            </div>
        </div>
    </a>
@endforeach

<div
    x-data="{
        observe () {
            let observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        @this.call('loadMore')
                    }
                })
            }, {
                root: null
            })
 
            observer.observe(this.$el)
        }
    }"
    x-init="observe"
></div>
</div>