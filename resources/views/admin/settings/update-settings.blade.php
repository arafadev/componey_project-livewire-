    <form class="row" wire:submit.prevent='submit'>
        @if (session()->has('message'))
            <div class="alert alert-primary my-success-alert">{{ session('message') }}</div>
        @endif
        <div class="col-md-6 mt-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" wire:model='settings.name' />
            @error('settings.name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 mt-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" placeholder="Enter your email" wire:model='settings.email' />
            @error('settings.email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 mt-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" placeholder="Enter your Address" wire:model='settings.address' />

            @error('settings.address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 mt-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" placeholder="Enter your Phone" wire:model='settings.phone' />

            @error('settings.phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-6 mt-3">
            <label class="form-label">Facebook</label>
            <input type="text" class="form-control" placeholder="Enter your Facebook"
                wire:model='settings.facebook' />
            @error('settings.facebook')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 mt-3">
            <label class="form-label">Twitter</label>
            <input type="text" class="form-control" placeholder="Enter your Twitter" wire:model='settings.twitter' />
            @error('settings.twitter')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 mt-3">
            <label class="form-label">LinkedIn</label>
            <input type="text" class="form-control" placeholder="Enter your LinkedIn"
                wire:model='settings.linkedin' />
            @error('settings.linkedin')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 mt-3">
            <label class="form-label">Instagram</label>
            <input type="text" class="form-control" placeholder="Enter your Instagram"
                wire:model='settings.instagram' />
            @error('settings.instagram')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-12 mt-4">
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
