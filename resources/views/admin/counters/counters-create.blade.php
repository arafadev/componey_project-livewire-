<x-create-modal title="Add New Counter">
    <div class="col-md-4 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text" id="emailBasic" class="form-control" placeholder="Enter your namee" wire:model='name' />
        @include('admin.error', ['property' => 'name'])
    </div>
    <div class="col-md-4 mb-0">
        <label for="dobBasic" class="form-label">Count</label>
        <input type="number" id="dobBasic" class="form-control" placeholder="Enter your count" wire:model='count'
           />
        @include('admin.error', ['property' => 'count'])

    </div>
    <div class="col-md-4 mb-0">
        <label for="dobBasic" class="form-label">icon</label>
        <input type="text" id="dobBasic" class="form-control" placeholder="Enter your icon" wire:model='icon'
     />
        @include('admin.error', ['property' => 'icon'])

    </div>
</x-create-modal>
