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
                    <th style="width: 18px;" class="pr-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input js-toggle-check-all"
                                data-target="#toggle" id="customCheckAlltoggle">
                            <label class="custom-control-label" for="customCheckAlltoggle"><span
                                    class="text-hide">Toggle all</span></label>
                        </div>
                    </th>
                    <th class="pr-0">
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-count">ID</a>
                    </th>
                    <th>
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Name</a>
                    </th>
                </tr>
            </thead>
            <tbody class="list" id="toggle">
                @foreach ($benefits as $benefit)
                    <tr>
                        <td class="pr-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input js-check-selected-row"
                                    id="customCheck1_toggle{{ $loop->iteration }}"
                                    wire:model="selectedItems.{{ $benefit->id }}">
                                <label class="custom-control-label"
                                    for="customCheck1_toggle{{ $loop->iteration }}"><span
                                        class="text-hide">Check</span></label>
                            </div>
                        </td>
                        <td class="pr-0">{{ $loop->iteration }}</td>
                        <td>
                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap">

                                <div class="media-body">
                                    <div class="d-flex flex-column">
                                        <p class="mb-0">
                                            <strong class="js-lists-values-name">
                                                {{ $benefit->name }}
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button class="btn btn-primary m-2" wire:click="save()">Assign benefits</button>

    </div>

    <script>
        window.addEventListener('memberUpdated', event => {
            Swal.fire({
                title: 'Benefits assigned successfully!',
                icon: 'success'
            });
        })
    </script>

</div>
