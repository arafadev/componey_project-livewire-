<x-create-modal title="Add New Service">
    <div class="col-md-6 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text" id="emailBasic" class="form-control" placeholder="Enter your namee" wire:model='name' />
        @include('admin.error', ['property' => 'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label for="dobBasic" class="form-label">link</label>
        <input type="text" id="dobBasic" class="form-control" placeholder="Enter your link" wire:model='link' />
        @include('admin.error', ['property' => 'link'])
    </div>
    <div class="col-md-6 mb-0">
        <label for="dobBasic" class="form-label">image</label>
        <input type="file" id="dobBasic" class="form-control" placeholder="Enter your image" wire:model='image' />
        @include('admin.error', ['property' => 'image'])
    </div>

    <div class="col-md-6 mb-0">
        <label for="dobBasic" class="form-label">Category</label>
        <select class="form-control" wire:model='category_id'>
            <option value="">Select Category</option>
            @if (count($categories) > 0)
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" wire:key="category-{{ $category->id }}">{{ $category->name }}
                    </option>
                @endforeach
            @endif
        </select>
        @include('admin.error', ['property' => 'category_id'])
    </div>

    @if ($image)
        <div class="my-4">
            <img src="{{ $image->temporaryUrl() }}" width="100%" height="150px">
        </div>
    @endif
    <div class="col-md-12 mb-0 mt-4">
        <label class="form-label">description</label>
        <textarea type="number" class="form-control" placeholder="Enter your icon" wire:model='description'></textarea>
        @include('admin.error', ['property' => 'description'])
    </div>
</x-create-modal>
