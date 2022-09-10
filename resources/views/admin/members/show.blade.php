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
                                {{ $member->member_details->nationality }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="list-group-item">
                    <div class="form-group row align-items-center mb-0">
                        <label class="col-form-label form-label col-sm-6">CONTACT NO.</label>
                        <div class="col-sm-6 d-flex align-items-center">
                            <div class="flex pc-text-right">
                                {{ $member->member_details->phone }}
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
                                    {{ $member->member_details->total_earned }}
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
                                    {{ $member->member_details->total_redeemed }}
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

    {{-- @livewire('member.transactions', ['transactions' => $member->transaction]) --}}
</div>
@endsection
@push('header')
@livewireStyles
@livewireScripts
@endpush
@push('footer')
@endpush