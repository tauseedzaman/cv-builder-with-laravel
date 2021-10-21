    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <div class="card d-block bg-light p-1">
                <p class="text-success pl-1">Please Enter Your Bio</p>
                <div class="form-group">
                    <input id="name" class="form-control border-right-0 border-left-0 rounded-0 @error('name') is-invalid @enderror " wire:model.defer="name" type="text" name="name" placeholder="Enter Your Name">
                    @error('name') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <input id="Email" class="form-control border-right-0 border-left-0 rounded-0 @error('email') is-invalid @enderror " wire:model.defer="email" type="email" name="email" placeholder="Enter Your Email">
                    @error('email') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <input id="Age" class="form-control border-right-0 border-left-0 rounded-0 @error('age') is-invalid @enderror " wire:model.defer="age" type="number" name="age" placeholder="Enter Your Age">
                    @error('age') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <select id="gender" wire:model.defer="gender" class="custom-select  border-right-0 border-left-0 rounded-0 @error('age') is-invalid @enderror" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <textarea id="address" wire:model.defer="address" class="form-control  @error('address') is-invalid @enderror" placeholder="Enter Your Address" name="address" rows="3"></textarea>
                    @error('address') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                </div>

                <center>
                    <button class="btn btn-success btn-block" wire:click="save_bio()" type="button">Save</button>
                </center>

            </div>
        </div>
    </div>
