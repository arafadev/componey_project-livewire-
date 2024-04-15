<div>
    <input type="text" class="form-control mb-3 w-25" placeholder="Search" wire:model.live='search'>
    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width="45%">Name</th>
                        <th width="45%">Progress</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $skill)
                        <tr>
                            <td>{{ $skill->name }}</td>

                            <td><span class="badge bg-label-primary me-1">{{ $skill->progress }}</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('skillUpdate', {id: {{ $skill->id }}})"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('skillDelete', {id: {{ $skill->id }}})"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('skillShow', {id: {{ $skill->id }}})"><i
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
