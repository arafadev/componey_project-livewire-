    <!-- Modal -->
    <div class="modal fade" id="showModel" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Show Skill</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
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
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
