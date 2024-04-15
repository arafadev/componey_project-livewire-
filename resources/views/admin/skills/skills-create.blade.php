 <x-create-modal title="Add New Skill">
     <div class="col-md-6 mb-0">
         <label for="emailBasic" class="form-label">Name</label>
         <input type="text" id="emailBasic" class="form-control" placeholder="Enter your namee" wire:model='name' />
         @include('admin.error', ['property' => 'name'])
     </div>
     <div class="col-md-6 mb-0">
         <label for="dobBasic" class="form-label">Progress</label>
         <input type="number" id="dobBasic" class="form-control" placeholder="Enter your porgress"
             wire:model='progress' min="1" max="100" />
         @include('admin.error', ['property' => 'progress'])

     </div>
 </x-create-modal>
