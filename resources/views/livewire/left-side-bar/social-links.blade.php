<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header"><b>facebook,github etc one by one</b></h6>

        <div class="form-group collapse-item">
            <input id="profile_name"
                class="form-control border-right-0 border-left-0 rounded-0 @error('profile_name') is-invalid @enderror "
                wire:model.defer="profile_name" type="text" name="profile_name" placeholder="Enter profile Name">
            @error('profile_name') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
            <input id="profile_link"
                class="form-control border-right-0 border-left-0 rounded-0 @error('profile_link') is-invalid @enderror "
                wire:model.defer="profile_link" type="text" name="profile_link" placeholder="Enter profile link">
            @error('profile_link') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
        </div>
        <center>
            <button class="btn btn-success btn-block" wire:click="save_social_links()" type="button">Save</button>
        </center>
    </div>
</div>
