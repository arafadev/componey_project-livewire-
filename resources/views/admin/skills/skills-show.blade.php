<x-show-modal title="Show Skill ">
    <div class="col-md-6 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text" id="emailBasic" disabled class="form-control" placeholder="Enter your namee"
            wire:model='name' />
    </div>
    <div class="col-md-6 mb-0">
        <label for="dobBasic" class="form-label">Progress</label>
        <input type="number" id="dobBasic" disabled class="form-control" placeholder="Enter your porgress"
            wire:model='progress' min="1" max="100" />
    </div>
</x-show-modal>
