<x-show-modal title="Show Service ">
    <div class="col-md-12 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <div disabled class="form-control" placeholder="Enter your namee" >{{ $name }}</div>
    </div>
        
    <div class="col-md-12 mb-0 mt-4">
        <label class="form-label">description</label>
        <textarea type="number" class="form-control" disabled placeholder="Enter your icon" >{{ $description }}</textarea>
    </div>
</x-show-modal>
