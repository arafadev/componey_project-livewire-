<x-edit-model title="Edit Category ">
    <div class="col-md-6 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text" id="emailBasic" class="form-control" placeholder="Enter your namee" wire:model='name' />
        @include('admin.error', ['property' => 'name'])
    </div>
</x-edit-model>
