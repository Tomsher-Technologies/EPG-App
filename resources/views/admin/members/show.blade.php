@extends('layout.admin.app')

@section('content')
    <div class="page-section container page__container">
        <div class="page-separator">
            <div class="page-separator__text">customer VIew</div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="list-group list-group-form">
                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">NAME</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    {{ $member->name }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">nationality</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    {{ $member->nationality }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">CONTACT NO.</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    {{ $member->phone }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">Email.</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    {{ $member->email }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">CUSTOMER ID</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    {{ $member->id }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">Last used</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    26 Sep 2022
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="list-group list-group-form">

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">EARNED reward POINT</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    <button type="button" class="btn btn-dark btn-md">
                                        {{ $member->total_earned }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">SPENTED reward POINTS</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    <button type="button" class="btn btn-dark btn-md">
                                        {{ $member->total_redeemed }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="list-group list-group-form">
                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">CARD NO</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    984 545 221
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">CARD ACTIVATED</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    10/5/2020
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">CARD VALIDITY</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    10/5/2025
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="page-separator">
            <div class="page-separator__text">
                transactions History
            </div>
        </div>

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

                            <!--
                                <th>
                                    <a href="javascript:void(0)" class="sort"
                                        data-sort="js-lists-values-count">amount spend </a>
                                </th> -->

                            <th>
                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-count">redeem
                                    point</a>
                            </th>

                            <th>
                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">expiry</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list" id="contacts">
                        <tr>
                            <td>
                                <a href="billing-invoice.html" class="text-underline">10002331</a>
                            </td>
                            <td>26 Sep 2022</td>

                            <td class="">POOL</td>

                            <!-- <td class=""> &#xFF04;2000</td> -->

                            <td class="">RFP 2000</td>

                            <td class="">26 Sep 2022</td>
                            <td class=""></td>
                        </tr>
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
    </div>
@endsection
@push('header')
    @livewireStyles
    @livewireScripts
@endpush
@push('footer')
@endpush
