<div>
    <div class="card mb-0">
        <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-employee-name"
            data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>
            <div class="card-header">
                <form class="form-inline">
                    <label class="mr-sm-2 form-label" for="inlineFormFilterBy">Filter by:</label>
                    <input wire:model="search" type="text" class="form-control search mb-2 mr-sm-2 mb-sm-0"
                        id="inlineFormFilterBy" placeholder="Search ..." />
                    <label class="sr-only" for="inlineFormRole">Filter</label>
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
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Discount
                                Type</a>
                        </th>
                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-company">
                                discount
                            </a>
                        </th>
                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-phone">
                                Validity Type
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
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-phone">Action</a>
                        </th>
                    </tr>
                </thead>
                <tbody class="list" id="contacts">
                    @foreach ($benefits as $benefit)
                        <tr>
                            <td class="pr-0">{{ $loop->iteration }}</td>
                            <td>
                                <p>
                                    {{ $benefit->name }}
                                </p>
                            </td>
                            <td>
                                <div class="media flex-nowrap align-items-center" style="white-space: nowrap">
                                    {{ ucfirst($benefit->discount_type) }}
                                </div>
                            </td>
                            <td>
                                <div class="media flex-nowrap align-items-center" style="white-space: nowrap">
                                    {{ $benefit->discount > 0 ? $benefit->discount : '--' }}
                                </div>
                            </td>
                            <td>
                                <div class="media flex-nowrap align-items-center" style="white-space: nowrap">
                                    {{ ucfirst($benefit->validity_type) }}
                                </div>
                            </td>
                            <td>
                                <div class="media flex-nowrap align-items-center" style="white-space: nowrap">
                                    {{ $benefit->validity > 0 ? $benefit->validity : '--' }}
                                </div>
                            </td>
                            <td>
                                <div class="media flex-nowrap align-items-center" style="white-space: nowrap">
                                    <div class="flex flex-column">
                                        <div style="font-size: 14px;text-transform: uppercase;" class="text-{{ $usedBenefits[$benefit->id]['status'] ? 'success' : 'danger' }}">
                                            {{ $usedBenefits[$benefit->id]['status'] ? 'Available' : 'Used' }}
                                        </div>
                                        <div style="font-size: 14px;text-transform: uppercase;">
                                            {{ isset($usedBenefits[$benefit->id]['remining_validity']) ? 'Remaining:' . $usedBenefits[$benefit->id]['remining_validity'] : '' }}
                                        </div>
                                        <div style="font-size: 14px;text-transform: uppercase;">
                                            {{ isset($usedBenefits[$benefit->id]['used_validity']) ? 'Used:' . $usedBenefits[$benefit->id]['used_validity'] : '' }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="media flex-nowrap align-items-center" style="white-space: nowrap">
                                    @if ($usedBenefits[$benefit->id]['status'])
                                        <button wire:click="redeem({{ $benefit->id }})" class="btn btn-primary">
                                            redeem
                                        </button>
                                    @else
                                        <button class="btn btn-secondary disabled" disabled aria-disabled="true">
                                            redeem
                                        </button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer p-8pt">
            {{ $benefits->links() }}
        </div>

        <script>
            window.addEventListener('memberUpdated', event => {
                Swal.fire({
                    title: 'Transaction created successfully!',
                    icon: 'success'
                });
            })
        </script>
    </div>

</div>
