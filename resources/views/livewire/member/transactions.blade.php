<div class="card mb-0">
    <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-employee-name"
        data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>
        <div class="card-header">
            <form class="form-inline">
                <label class="mr-sm-2 form-label" for="inlineFormFilterBy">Filter by:</label>
                <label class="sr-only" for="inlineFormRole">Filter</label>
                <select wire:model="location" wire:change="changeLocation" id="inlineFormRole" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                    <option value="0">All Locations</option>
                    @foreach ($locations as $location)
                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
            </form>
        </div>

        @if ($transactions->count())
        <table class="table mb-0 thead-border-top-0 table-nowrap">
            <thead>
                <tr>
                    <th>
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-count">TRAN. NO.
                        </a>
                    </th>

                    <th>
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">DATE</a>
                    </th>

                    <th>
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">LOCATION</a>
                    </th>
                    <th>
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-count">redeem
                            point</a>
                    </th>
                </tr>
            </thead>
            <tbody class="list" id="contacts">
                @foreach ($transactions as $transaction)
                <tr>
                    <td>
                        {{ $transaction->id }}
                    </td>
                    <td>
                        {{ $transaction->created_at->format('d/m/Y') }}
                    </td>

                    <td class="">
                        {{ $transaction->location->name }}
                    </td>
                    <td class="">
                        {{ (int)$transaction->points }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="p-4 m-0">
            No transactions yet
        </p>
        @endif

    </div>
{{-- 
    <div class="card-footer p-8pt">
        <ul class="pagination justify-content-start pagination-xsm m-0">
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" class="material-icons">chevron_left</span>
                    <span>Prev</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Page 1">
                    <span>1</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Page 2">
                    <span>2</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span>Next</span>
                    <span aria-hidden="true" class="material-icons">chevron_right</span>
                </a>
            </li>
        </ul>
    </div> --}}
</div>