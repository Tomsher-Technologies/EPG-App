@extends('layout.member.dashboard', ['pagen' => 'Dashboard'])

@section('content')
    <div id="account" class="raffles-breadcrumb">
        <div class="container">
            <div class="row hr-size-3 vr-size-3">
                <main id="main" class="col-xxl-12 col-lg-12">
                    <div class="content-element-main">
                        <div id="dash-box" class="pt-5">
                            <div class="col-md-12">
                                <div class="row hr-size-3">
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                        <div class="card booking card1">
                                            <div class="card-body">
                                                <div class="booking-status d-flex align-items-center">
                                                    <span>
                                                        <i class="material-icons-outlined dash-icon">stars</i>
                                                    </span>
                                                    <div class="ms-4">
                                                        <h2 class="mb-0 font-w600">{{ $plan }}</h2>
                                                        <p class="mb-0 text-nowrap dash-box-content">
                                                            Active plan
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                        <div class="card booking card2">
                                            <div class="card-body">
                                                <div class="booking-status d-flex align-items-center">
                                                    <span>
                                                        <i class="material-icons-outlined dash-icon">assistant_photo
                                                        </i>
                                                    </span>
                                                    <div class="ms-4">
                                                        <h2 class="mb-0 font-w600">{{ $lcoations_visited }}</h2>
                                                        <p class="mb-0 text-nowrap dash-box-content">
                                                            Locations visited
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                        <div class="card booking card3">
                                            <div class="card-body">
                                                <div class="booking-status d-flex align-items-center">
                                                    <span>
                                                        <i class="material-icons-outlined dash-icon">star_border</i>
                                                    </span>
                                                    <div class="ms-4">
                                                        <h2 class="mb-0 font-w600">
                                                            {{ $transactions->count() }}
                                                        </h2>
                                                        <p class="mb-0 text-nowrap dash-box-content">
                                                            Benefits used
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                        <div class="card booking card4">
                                            <div class="card-body">
                                                <div class="booking-status d-flex align-items-center">
                                                    <span>
                                                        <i class="material-icons-outlined dash-icon">star_border</i>
                                                    </span>
                                                    <div class="ms-4">
                                                        <h2 class="mb-0 font-w600">
                                                            {{ $remaining_days }}
                                                        </h2>
                                                        <p class="mb-0 text-nowrap dash-box-content">
                                                            Remaining days
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-element-main">
                        <h2>Transaction History</h2>
                        <div class="raffles-table-wrap shop-acc">
                            <table class="raffles-table--responsive-md">
                                <thead>
                                    <tr>
                                        <th>Benefits</th>
                                        <th>Used Location</th>
                                        <th class="order-date">Last Used</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td data-cell-title="Benefits">
                                                <span class="raffles-price">
                                                    {{ $transaction->benefit->name }}
                                                </span>
                                            </td>
                                            <td data-cell-title="Used Location">
                                                {{ $transaction->benefit->location->name }}
                                            </td>
                                            <td data-cell-title="Last Used">
                                                {{ $transaction->created_at->format('d/m/Y h:i A') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
