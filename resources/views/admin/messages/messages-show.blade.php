<x-show-modal title="Show Service ">
    <div class="col-md-6 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <div disabled class="form-control" placeholder="Enter your namee">{{ $name }}</div>
    </div>

    <div class="col-md-6 mb-0 mt-4">
        <label class="form-label">email</label>
        <textarea type="email" class="form-control" disabled placeholder="Enter your email">{{ $email }}</textarea>
    </div>
    <div class="col-md-12 mb-0 mt-4">
        <label class="form-label"> Subject </label>
        <textarea type="email" class="form-control" disabled placeholder="Enter your email">{{ $subject }}</textarea>
    </div>
    <div class="col-md-12 mb-0 mt-4">
        <label class="form-label"> Message </label>
        <textarea type="email" class="form-control" disabled placeholder="Enter your email">{{ $message }}</textarea>
    </div>
</x-show-modal>
