<x-edit-model title="Edit Service ">
    <div class="col-md-6 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text" id="emailBasic" class="form-control" placeholder="Enter your namee" wire:model='name' />
        @include('admin.error', ['property' => 'name'])
    </div>
    <div class="col-md-6  mb-0">
        <label for="dobBasic" class="form-label">icon</label>
        <input type="text" id="dobBasic" class="form-control" placeholder="Enter your icon" wire:model='icon' />
        @include('admin.error', ['property' => 'icon'])
    </div>
    <div class="col-md-12 mb-0 mt-4">
        <label class="form-label">description</label>
        <textarea type="number" class="form-control" placeholder="Enter your icon" wire:model='description'></textarea>
        @include('admin.error', ['property' => 'description'])
    </div>
</x-edit-model>
