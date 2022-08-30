@extends('layout.admin.app')

@section('content')
    <div class="page-section container page__container">
        <div class="page-separator">
            <div class="page-separator__text">All customers</div>
        </div>

        @if ($members)
            <div class="card mb-0">
                <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-employee-name"
                    data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>
                    <div class="card-header">
                        <form class="form-inline">
                            <label class="mr-sm-2 form-label" for="inlineFormFilterBy">Filter by:</label>
                            <input type="text" class="form-control search mb-2 mr-sm-2 mb-sm-0" id="inlineFormFilterBy"
                                placeholder="Search ..." />
                            <label class="sr-only" for="inlineFormRole">Filter</label>
                            <select id="inlineFormRole" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                                <option value="">All Locations</option>
                                <option value="">Pool</option>
                                <option value="">Gym</option>
                                <option value="">Spa</option>
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
                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-company">EARNED
                                        POINTS</a>
                                </th>
                                <th>
                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-phone">USED
                                        POINTS</a>
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
                                            <div class="avatar avatar-sm mr-8pt">
                                                <span class="avatar-title rounded bg-warning">
                                                    {{ (int)$member->total_earned }}
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media align-items-center" style="white-space: nowrap">
                                            <div class="avatar avatar-sm mr-8pt">
                                                <span class="avatar-title rounded bg-primary text-white">
                                                    {{ (int)$member->total_redeemed }}
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ml-auto mb-2 mb-sm-0 custom-control-inline mr-0">
                                            <div class="custom-control custom-checkbox-toggle ml-8pt">
                                                <input checked="" type="checkbox" id="active{{ $loop->iteration }}"
                                                    class="custom-control-input" />
                                                <label class="custom-control-label"
                                                    for="active{{ $loop->iteration }}">Active</label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button onclick="location.href='add-customer.html'" type="button"
                                            class="btn btn-secondary">
                                            <i class="material-icons">mode_edit</i>
                                        </button>

                                        <button class="btn btn-accent" data-toggle="swal" data-swal-title="Are you sure?"
                                            data-swal-text="You will not be able to recover this imaginary file!"
                                            data-swal-type="warning" data-swal-show-cancel-button="true"
                                            data-swal-confirm-button-text="Yes, delete it!"
                                            data-swal-confirm-cb="#swal-confirm-delete" data-swal-close-on-confirm="false">
                                            <i class="material-icons">delete_forever</i>
                                        </button>
                                        <div id="swal-confirm-delete" class="d-none" data-swal-type="success"
                                            data-swal-title="Deleted!"
                                            data-swal-text="Your imaginary file has been deleted.">
                                        </div>

                                        <button onclick="location.href='customers-single.html'" type="button"
                                            class="btn btn-primary">
                                            <i class="material-icons">pageview</i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

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
                </div>
            </div>
        @endif
    </div>
@endsection
