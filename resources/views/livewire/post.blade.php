<div class="post__container mb-4">
    <div class="post__thumbnail mb-4" style="background: linear-gradient(0deg, rgba(33, 33, 33, 0.85) 0%, rgba(33, 33, 33, 0.85) 100%), url('/images/tokyo_tower.svg'); background-repeat: no-repeat; background-size: cover; background-position-y: 50%;">
        <img alt="{user}'s image of {title}" src="/images/tokyo_tower.svg">
    </div>

    <div class="d-flex justify-content-between">
        <div>
            <div class="d-flex gap-2">
                <p class="post__tag">#tokyo</p>
                <p class="post__tag">#japan</p>
                <p class="post__tag">#photograph</p>
            </div>
        
            <p class="post__title">Tokyo tower during the day</p>
            <p class="post__description">A picture from my first trip to Tokyo during the winter of 2023. It was a beautiful trip where I got up to many exciting things.</p>
        </div>
        
        <div class="text-center">
            <a class="pointer" wire:click="toggleLike">
                @if($isLiked)
                    <img alt="Like icon" src="/images/icons/liked.png">
                @else
                    <img alt="Like icon" src="/images/icons/unliked.png">
                @endif
            </button>
            <p class="like__count">53</p>
            </a>
        </div>
    </div>
</div>