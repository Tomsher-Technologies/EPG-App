<div class="card mb-0">
    <div class="table-responsive" >

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
                        <a href="javascript:void(0)">ID</a>
                    </th>
                    <th>
                        <a href="javascript:void(0)">Name</a>
                    </th>
                    <th>
                        <a href="javascript:void(0)">Status</a>
                    </th>
                    <th>
                        <a href="javascript:void(0)">ACTION</a>
                    </th>
                </tr>
            </thead>
            <tbody class="list" id="contacts">
                @foreach ($benifits as $benifit)
                    <tr>
                        <td class="pr-0">{{ $loop->iteration }}</td>
                        <td>
                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap">
                                <div class="media-body">
                                    <div class="d-flex flex-column">
                                        <p class="mb-0">
                                            <strong class="js-lists-values-name">
                                                {{ $benifit->name }}
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="ml-auto mb-2 mb-sm-0 custom-control-inline mr-0">
                                <div class="custom-control custom-checkbox-toggle ml-8pt">
                                    {{-- <form action="" class="s-inline"> --}}
                                    <input wire:click="toggleStatus({{ $benifit->id }})"
                                        {{ $benifit->status == 1 ? 'checked' : '' }} value="{{ $benifit->id }}"
                                        type="checkbox" id="active{{ $loop->iteration }}"
                                        class="custom-control-input" />
                                    <label class="custom-control-label"
                                        for="active{{ $loop->iteration }}">Active</label>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </td>
                        <td>
                            <a type="button" class="btn btn-secondary" href="{{ route('benefit.category.edit', $benifit) }}">
                                <i class="material-icons">mode_edit</i>
                            </a>
                            {{-- <button class="btn btn-accent" type="submit"
                                wire:click="$emit('triggerDelete',{{ $benifit->id }})">
                                <i class="material-icons">delete_forever</i>
                            </button> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer p-8pt">
        {{ $benifits->links() }}
    </div>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            @this.on('triggerDelete', id => {
                Swal.fire({
                    title: 'Are You Sure?',
                    text: 'Loction will be deleted!',
                    icon: "error",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Delete!'
                }).then((result) => {
                    if (result.value) {
                        @this.call('deleteBenifit', id)
                    }
                });
            });
        });
        window.addEventListener('modelDeleted', e => {
            Swal.fire({
                title: 'Benifit deleted successfully!',
                icon: 'success'
            });
        })
        window.addEventListener('modelDeletedFailed', e => {
            Swal.fire({
                title: 'Benifit deleted failed, please try again!',
                icon: 'warning'
            });
        })
        window.addEventListener('statusChange', e => {
            $status = "Activated";
            if (e.detail.status == false) {
                $status = "Deactivated";
            }
            Swal.fire({
                title: 'Benifit ' + $status,
                icon: 'success'
            });
        })
    </script>
</div>
