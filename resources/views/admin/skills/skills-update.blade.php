<x-edit-model title="Edit Skill ">
    <div class="col-md-6 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text" id="emailBasic" class="form-control" placeholder="Enter your namee" wire:model='name' />
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6 mb-0">
        <label for="dobBasic" class="form-label">Progress</label>
        <input type="number" id="dobBasic" class="form-control" placeholder="Enter your porgress"
            wire:model='progress' min="1" max="100" />
        @error('progress')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</x-edit-model>
