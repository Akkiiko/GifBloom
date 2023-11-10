<div wire:ignore.self class="modal fade" id="uploadModal" tabindex="-1" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body p-4">
          <form wire:submit="save">
            @if ($photo) 
              <div class="text-center mb-4 br__8" style="background: linear-gradient(0deg, rgba(33, 33, 33, 0.85) 0%, rgba(33, 33, 33, 0.85) 100%), url('{{ $photo->temporaryUrl() }}'); background-repeat: no-repeat; background-size: cover; background-position-y: 50%;">
                <img style="max-height: 200px" src="{{ $photo->temporaryUrl() }}">
              </div>
            @endif
            
            <div class="custom-file-input @error('photo') error__border br__8 @enderror">
              <label for="photo">Choose a file</label>
              <input type="file" wire:model.defer="photo" />
            </div>

            @error('photo') <p class="error">{{ $message }}</p> @enderror
            
            <div class="mt-3">
              <label for="title">Title</label>
              <input wire:model="title" class="primary__input w-100 mt-2" type="text" required name="title" value="{{ old('title') }}" placeholder="A picture of Tokyo Tower...">
              @error('title') <p class="error mt-3">{{ $message }}</p> @enderror
            </div>
            <div class="mt-4">
              <label>Content</label>
              <textarea  wire:model="content" class="w-100 upload__post "></textarea>
              @error('content') <p class="error">{{ $message }}</p> @enderror
            </div>
  
            <button type="submit" class="primary__button m-0 w-100 mt-3 post__button">Post</button>
          </form>
        </div>
      </div>
    </div>
  </div>