<div id="collapsePhoto" class="collapse p-3" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded px-2">
                <h6 class="collapse-header"><b>Add Photo to your CV</b></h6>

                <div class="custom-file " style="">
                    <input id="photo" class="custom-file-input @error('photo') is-invalid @enderror" wire:model.lazy="photo" type="file" name="photo">
                    <label for="photo" class="custom-file-label">Choose Photo</label>
                    @error('photo') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                    <div wire:loading wire:target="photo">{{ __('Uploading...') }}</div>
                </div>

                @if ($photo)
                    {{ __('Photo Preview: ') }}<br>
                    <img width="90%" height="90%" src="{{ $photo->temporaryUrl() }}">
                 @endif/
                <center>
                    <button class="btn btn-success btn-block" wire:click="save_profile_photo()" type="button">Save</button>
                </center>
            </div>
        </div>
