<div>
    <input type="text" class="form-control mb-3 w-25" placeholder="Search" wire:model.live='search'>
    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $record)
                        <tr>
                            <td>{{ $record->name }}</td>
                            <td>{{ $record->category?->name }}</td>
                            <td><img src="{{ asset($record->image) }}" alt="" width="50px" height="50px"></td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('projectUpdate', {id: {{ $record->id }}})"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('projectDelete', {id: {{ $record->id }}})"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('projectShow', {id: {{ $record->id }}})"><i
                                                class="bx bx-trash me-1"></i>
                                            Show</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        @else
            <div class="text-danger"> No Found data</div>
        @endif
    </div>
</div>
