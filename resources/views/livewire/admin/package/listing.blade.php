<div class="card mb-0">
    <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-employee-name"
        data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>
        <div class="card-header">
            <form class="form-inline">
                <label class="mr-sm-2 form-label" for="inlineFormFilterBy">Filter by:</label>
                <input wire:model="search" type="text" class="form-control search mb-2 mr-sm-2 mb-sm-0"
                    id="inlineFormFilterBy" placeholder="Search ..." />
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
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Price</a>
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
                @foreach ($packages as $package)
                    <tr>
                        <td class="pr-0">{{ $loop->iteration }}</td>
                        <td>
                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap">

                                <div class="media-body">
                                    <div class="d-flex flex-column">
                                        <p class="mb-0">
                                            <strong class="js-lists-values-name">
                                                {{ $package->name }}
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center" style="white-space: nowrap">
                                {{ $package->getPrice() }}
                            </div>
                        </td>
                        <td>
                            <div class="ml-auto mb-2 mb-sm-0 custom-control-inline mr-0">
                                <div class="custom-control custom-checkbox-toggle ml-8pt">
                                    {{-- <form action="" class="s-inline"> --}}
                                    <input wire:click="toggleStatus({{ $package->id }})"
                                        {{ $package->status == 1 ? 'checked' : '' }} value="{{ $package->id }}"
                                        type="checkbox" id="active{{ $loop->iteration }}"
                                        class="custom-control-input" />
                                    <label class="custom-control-label"
                                        for="active{{ $loop->iteration }}">Active</label>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </td>
                        <td>
                            <a type="button" class="btn btn-secondary" href="{{ route('package.edit', $package) }}">
                                <i class="material-icons">mode_edit</i>
                            </a>
                            <button class="btn btn-accent" type="submit"
                                wire:click="$emit('triggerDelete',{{ $package->id }})">
                                <i class="material-icons">delete_forever</i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer p-8pt">
        {{ $packages->links() }}
    </div>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            @this.on('triggerDelete', id => {
                Swal.fire({
                    title: 'Are You Sure?',
                    text: 'Package will be deleted!',
                    icon: "error",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Delete!'
                }).then((result) => {
                    if (result.value) {
                        @this.call('deletePackage', id)
                    }
                });
            });
        })

        window.addEventListener('modelDeleted', e => {
            Swal.fire({
                title: 'Package deleted successfully!',
                icon: 'success'
            });
        })
        window.addEventListener('modelDeletedFailed', e => {
            Swal.fire({
                title: 'Package deleted failed, please try again!',
                icon: 'warning'
            });
        })
        window.addEventListener('statusChange', e => {
            $status = "Activated";
            if (e.detail.status == false) {
                $status = "Deactivated";
            }
            Swal.fire({
                title: 'Package ' + $status,
                icon: 'success'
            });
        })
    </script>

</div>
