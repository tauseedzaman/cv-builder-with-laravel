<div id="collapseProjects" class="collapse" aria-labelledby="headingProjects" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header"><b>Add upto 10 Your Best projects</b></h6>

        <div class="form-group collapse-item">
            <textarea id="projects" class="form-control @error('projects') is-invalid @enderror "
                wire:model.defer="projects" type="textarea" name="projects"
                placeholder="HospitalMS, E-commerse, Blog,....."> </textarea>
            @error('projects') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
        </div>

        <center class="px-3">
            <button class="btn btn-success btn-block" wire:click="save_projects()" type="button">Save</button>
        </center>
    </div>
</div>
