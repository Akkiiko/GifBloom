<div class="post__container">
    <form wire:submit="filterPosts">
        <p class="post__title">Filters</p>

        <label class="mt-2" for="postSearch">Search</label>
        <input wire:model.live="search" type="text" name="postSearch" placeholder="Enter a keyword..." class="w-100 primary__input mt-2">

        <label class="mt-4" for="sortBy">Sort By</label>
        <select wire:model.live="sort" class="w-100 primary__input mt-2">
            <option value="relevant" default>Relevant</option>
            <option value="created_at asc">Created Ascending</option>
            <option value="likes asc">Likes Ascending</option>
            <option value="likes desc">Likes Descending</option>
        </select>

        <button type="submit" class="mt-4 w-100 mx-0 primary__button login__button">Filter</button>
    </form>
</div>