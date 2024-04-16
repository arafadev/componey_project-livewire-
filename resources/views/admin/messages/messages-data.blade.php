<div>
    <input type="text" class="form-control mb-3 w-25" placeholder="Search" wire:model.live='search'>
    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width="30%">Name</th>
                        <th width="30%">Email</th>
                        <th width="30%"> Subject</th>
                        <th width="20%">Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $record)
                        <tr>
                            <td>{{ $record->name }}</td>
                            <td>{{ $record->email }}</td>
                            <td>{{ $record->subject }}</td>
                            <td>
                                <span class="{{ $record->status == '0' ? 'text-danger ' : 'text-primary' }}">{{ $record->status == '0'  ? 'InActive ' : 'Active'  }}</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('messageDelete', {id: {{ $record->id }}})"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('messageShow', {id: {{ $record->id }}})"><i
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
