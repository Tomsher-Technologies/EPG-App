@extends('layout.admin.app')

@section('content')
    <div class="page-section container page__container" id="container-wide">
        <div class="page-separator">
            <div class="page-separator__text">customer VIew</div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="list-group list-group-form">

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




                </div>
            </div>

            <div class="col-lg-6">
                {{-- <div class="list-group list-group-form">

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">QR CODE</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    <img src="{{ $member->getQRUrl() }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                </div> --}}

                <div class="list-group list-group-form">



                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">Membership Status</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    <div class="status avatar avatar-sm mr-8pt">
                                        <span
                                            class="px-2 avatar-title rounded bg-{{ isExpired($member->member_details->expiry_date) ? 'success' : 'danger' }} text-white">
                                            {{ isExpired($member->member_details->expiry_date) ? 'ACTIVE' : 'EXPIRED' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">Package</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    {{ $member->member_details->package->name }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">Purchase Date</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    {{ Carbon\Carbon::parse($member->member_details->purchase_date)->format('d/m/Y') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">Expiry Date</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    {{ Carbon\Carbon::parse($member->member_details->expiry_date)->format('d/m/Y') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-6">Last used</label>
                            <div class="col-sm-6 d-flex align-items-center">
                                <div class="flex pc-text-right">
                                    {{ Carbon\Carbon::parse($member->member_details->last_used)->format('d/m/Y') }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-12">
                <div class="list-group list-group-form">
                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <div class="flex">
                                <a href="{{ route('members.transactions', $member) }}" class="btn btn-secondary">View
                                    Previous Transactions</a>
                                <a href="{{ route('members.logins', $member) }}" class="btn btn-secondary">View Login
                                    History</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="page-section container page__container pt-0" id="container-wide">
        <div class="page-separator">
            <div class="page-separator__text">
                Benefits
            </div>
        </div>
        @livewire('admin.member.benefit-list', [
            'package' => $member->member_details->package,
            'user' => $member,
        ])
    </div>
@endsection
@push('header')
    @livewireStyles
    @livewireScripts
    <style>
        .status.avatar {
            width: auto;
        }

        #container-wide {
            max-width: 1200px;
        }

        .table-nowrap th {
            white-space: unset;
        }
    </style>
@endpush
@push('footer')
@endpush
