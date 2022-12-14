<div class="card mb-0">
    <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-employee-name"
        data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>
        <div class="card-header">
            <form class="form-inline">
                <label class="mr-sm-2 form-label" for="inlineFormFilterBy">Filter by:</label>
                <input wire:model="search" type="text" class="form-control search mb-2 mr-sm-2 mb-sm-0"
                    id="inlineFormFilterBy" placeholder="Search ..." />
                <label class="sr-only" for="inlineFormRole">Filter</label>
                <select wire:model="package" wire:change="changePackage" id="inlineFormRole"
                    class="custom-select mb-2 mr-sm-2 mb-sm-0">
                    <option value="0">All Packages</option>
                    @foreach ($packages as $package)
                        <option value="{{ $package->id }}">{{ $package->name }}</option>
                    @endforeach
                </select>
            </form>
        </div>

        <table class="table mb-0 thead-border-top-0 table-nowrap">
            <thead>
                <tr>
                    <th class="pr-0">
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-count">ID</a>
                    </th>
                    <th>
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Name</a>
                    </th>
                    <th>
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-company">
                            Package
                        </a>
                    </th>
                    <th>
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-phone">
                            Validity
                        </a>
                    </th>
                    <th>
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-phone">Status</a>
                    </th>
                    <th>
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">ACTION</a>
                    </th>
                </tr>
            </thead>
            <tbody class="list" id="contacts">
                @foreach ($members as $member)
                    <tr>
                        <td class="pr-0">{{ $loop->iteration }}</td>
                        <td>
                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap">
                                <div class="avatar avatar-sm mr-8pt">
                                    <span class="avatar-title rounded-circle">{{ getInitials($member->name) }}</span>
                                </div>
                                <div class="media-body">
                                    <div class="d-flex flex-column">
                                        <p class="mb-0">
                                            <strong class="js-lists-values-name">
                                                {{ $member->name }}
                                            </strong>
                                        </p>
                                        <small class="js-lists-values-email text-50">
                                            {{ $member->email }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center" style="white-space: nowrap">
                                {{ $member->member_details->package->name }}
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center" style="white-space: nowrap">
                                <div class="d-flex flex-column">
                                    @php
                                        $status = getExpiryDateString($member->member_details->purchase_date, $member->member_details->expiry_date);
                                    @endphp
                                    <div class="text-{{ $status['status'] ? 'success' : 'danger' }}">
                                        {{ $status['msg'] }}
                                    </div>
                                    <small class="js-lists-values-email text-50">
                                        {{ $status['status'] ? 'Expires on:' : 'Expired on' }}
                                        {{ Carbon\Carbon::parse($member->member_details->expiry_date)->format('d/m/Y') }}
                                    </small>
                                </div>

                            </div>
                        </td>
                        <td>
                            <div class="ml-auto mb-2 mb-sm-0 custom-control-inline mr-0">
                                <div class="custom-control custom-checkbox-toggle ml-8pt">
                                    {{-- <form action="" class="s-inline"> --}}
                                    <input wire:click="toggleStatus({{ $member->id }})"
                                        {{ $member->status == 1 ? 'checked' : '' }} value="{{ $member->id }}"
                                        type="checkbox" id="active{{ $loop->iteration }}"
                                        class="custom-control-input" />
                                    <label class="custom-control-label"
                                        for="active{{ $loop->iteration }}">Active</label>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </td>
                        <td>
                            <a type="button" class="btn btn-secondary" href="{{ route('members.edit', $member) }}">
                                <i class="material-icons">mode_edit</i>
                            </a>
                            <button class="btn btn-accent" type="submit"
                                wire:click="$emit('triggerDelete',{{ $member->id }})">
                                <i class="material-icons">delete_forever</i>
                            </button>
                            <a type="button" class="btn btn-primary" href="{{ route('members.show', $member) }}">
                                <i class="material-icons">pageview</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer p-8pt">
        {{ $members->links() }}
    </div>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            @this.on('triggerDelete', id => {
                Swal.fire({
                    title: 'Are You Sure?',
                    text: 'Member record will be deleted!',
                    icon: "error",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Delete!'
                }).then((result) => {
                    if (result.value) {
                        @this.call('deleteMember', id)
                        Swal.fire({
                            title: 'Member deleted successfully!',
                            icon: 'success'
                        });
                    }
                });
            });
        })
    </script>

</div>
