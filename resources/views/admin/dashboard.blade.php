@extends('layout.admin.app')

@section('content')
    <div class="pt-32pt">
        <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
            <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
                <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                    <h2 class="mb-0">Dashboard</h2>

                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div>

            {{-- <div class="row" role="tablist">
                <div class="col-auto">
                    <a href="" class="btn btn-outline-secondary">New Report</a>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="container page__container">
        <div class="page-section">
            <div class="row mb-lg-8pt">
                <div class="col-lg-12">
                    <div class="page-separator">
                        <div class="page-separator__text">
                            Overview
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header pb-0 border-0 d-flex">
                                    <div class="flex">
                                        <div class="h2 mb-0">
                                            {{ $membersCount }}
                                        </div>
                                        <p class="card-title">
                                            CUSTOMERS
                                        </p>
                                    </div>
                                    {{-- <i class="material-icons text-50">more_horiz</i> --}}
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <a href="{{ route('members.index') }}" class="btn btn-sm btn-outline-secondary">View
                                            all customers</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header pb-0 border-0 d-flex">
                                    <div class="flex">
                                        <div class="h2 mb-0">{{ $locationCount }}</div>
                                        <p class="card-title">
                                            LOCATIONS
                                        </p>
                                    </div>
                                    {{-- <i class="material-icons text-50">more_horiz</i> --}}
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <a href="{{ route('location.index') }}" class="btn btn-sm btn-outline-secondary">View all locations</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header pb-0 border-0 d-flex">
                                    <div class="flex">
                                        <div class="h2 mb-0">
                                            {{ $stafCount }}
                                        </div>
                                        <p class="card-title">
                                            STAFFS
                                        </p>
                                    </div>
                                    {{-- <i class="material-icons text-50">more_horiz</i> --}}
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <a href="{{ route('receptionist.index') }}"
                                            class="btn btn-sm btn-outline-secondary">View all staffs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row card-group-row">
                        <div class="col-md-6 card-group-row__col">
                            <div class="card card-group-row__card">
                                <div class="card-header d-flex">
                                    <div class="flex d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">
                                            500
                                        </div>
                                        <div class="flex d-flex flex-column">
                                            <p class="card-title">
                                                Location Access
                                            </p>
                                            <p class="card-subtitle text-50">
                                                This month
                                            </p>
                                        </div>
                                    </div>
                                    {{-- <a href="#"><i class="material-icons text-50">more_horiz</i></a> --}}
                                </div>
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <div class="mb-4pt">
                                        <p class="d-flex align-items-center mb-0">
                                            <small class="flex lh-24pt"><strong>Restaurant,
                                                </strong></small>
                                            <small class="text-50 lh-24pt">150 visits</small>
                                        </p>
                                        <div class="progress" style="height: 4px">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div class="mb-4pt">
                                        <p class="d-flex align-items-center mb-0">
                                            <small class="flex lh-24pt"><strong>Spa,
                                                </strong></small>
                                            <small class="text-50 lh-24pt">50 visits</small>
                                        </p>
                                        <div class="progress" style="height: 4px">
                                            <div class="progress-bar bg-accent" role="progressbar" style="width: 10%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 card-group-row__col">
                            <div class="card card-group-row__card">
                                <div class="card-header p-0 nav border-0">
                                    <div class="row no-gutters flex" role="tablist">
                                        <div class="col-auto">
                                            <div class="p-card-header d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">
                                                    20%
                                                </div>
                                                <div class="flex">
                                                    <p class="card-title">
                                                        Reward
                                                        Points
                                                        Reduptions
                                                    </p>
                                                    <div class="d-flex align-items-center">
                                                        <p class="text-50 mb-0 d-flex align-items-center mr-16pt">
                                                            <i class="indicator-line rounded bg-gray mr-8pt"></i>
                                                            <small>Generation</small>
                                                        </p>
                                                        <p class="text-50 mb-0 d-flex align-items-center">
                                                            <i class="indicator-line rounded bg-primary mr-8pt"></i>
                                                            <small>Redumption</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto ml-sm-auto">
                                            <div class="p-card-header pl-0">
                                                {{-- <a href="#"><i class="material-icons text-50">more_horiz</i></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body position-relative o-hidden p-0">
                                    <div class="chart z-0" style="height: 125px">
                                        <canvas id="viewsChart"
                                            class="chart-canvas js-update-chart-line js-update-chart-line-2nd-accent"
                                            data-chart-line-border-color="primary,gray" data-chart-suffix=" views"
                                            data-chart-hide-axes="true"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-separator">
                <div class="page-separator__text">
                    Recently added members
                </div>
            </div>

            @if ($recentMembers)
                <div class="card mb-0">
                    <div class="table-responsive" data-toggle="lists">
                        <table class="table mb-0 thead-border-top-0 table-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 18px" class="pr-0">
                                        <a href="javascript:void(0)" 
                                            data-sort="js-lists-values-count">ID</a>
                                    </th>

                                    <th>
                                        <a href="javascript:void(0)" 
                                            data-sort="js-lists-values-name">Name</a>
                                    </th>

                                    <th style="width: 150px">
                                        <a href="javascript:void(0)" 
                                            data-sort="js-lists-values-company">EARNED POINTS</a>
                                    </th>

                                    <th style="width: 48px">
                                        <a href="javascript:void(0)"
                                            data-sort="js-lists-values-phone">USED
                                            POINTS</a>
                                    </th>
                                    <th style="width: 24px"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="contacts">
                                @foreach ($recentMembers as $member)
                                    <tr>
                                        <td class="pr-0">{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span
                                                        class="avatar-title rounded-circle">{{ getInitials($member->name) }}</span>
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
                                                        {{ (int) $member->member_details->total_earned }}
                                                    </span>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="media align-items-center" style="white-space: nowrap">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-primary text-white">
                                                        {{ (int) $member->member_details->total_redeemed }}
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif


        </div>
    </div>
@endsection
