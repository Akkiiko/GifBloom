<form wire:submit="save">
    <div class="post__container">
        <div class="avatar-section d-flex flex-wrap flex-md-nowrap">
            <div class="m-auto m-md-none">
                <img width="150" height="150" class="br__8" alt="User profile picture" src="{{ Auth()->user()->avatar }}">
                <p class="current__avatar text-center mt-2">Current Avatar</p>
            </div>
    
            <div class="upload__avatar text-center my-4 my-lg-0 py-5 py-md-none">
                <input type="file" id="avatar" wire:model="avatar" accept="image/*" hidden />
                <label for="avatar" class="avatar__label">
                    <h5>Click to select new avatar</h5>
                    <p>(Max size: 20 MB)</p>
                </label>
            </div>
            
    
            <div class="m-auto m-md-none">
                <img width="150" height="150" class="new__avatar br__8" alt="User profile picture" src="@if($avatar) {{ $avatar->temporaryUrl() }} @else {{asset('/images/questionMark.png')}} @endif">
                <p class="current__avatar text-center mt-2">New Avatar</p>
            </div>
        </div>
        
    </div>
    
    <div class="text-end">
        <button class="primary__button mx-0 mt-3">Update Avatar</button>
    </div>
</form>