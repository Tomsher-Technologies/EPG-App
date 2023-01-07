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
                                            MEMBERS
                                        </p>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="text-center">
                                        @if (auth()->user()->isA('superadmin'))
                                            <a href="{{ route('members.index') }}"
                                                class="btn btn-sm btn-outline-secondary">View
                                                all members</a>
                                        @endif
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
                                        @if (auth()->user()->isA('superadmin'))
                                            <a href="{{ route('location.index') }}"
                                                class="btn btn-sm btn-outline-secondary">View all locations</a>
                                        @endif
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
                                            RECEPTIONISTS
                                        </p>
                                    </div>
                                    {{-- <i class="material-icons text-50">more_horiz</i> --}}
                                </div>

                                <div class="card-body">
                                    <div class="text-center">
                                        @if (auth()->user()->isA('superadmin'))
                                            <a href="{{ route('receptionist.index') }}"
                                                class="btn btn-sm btn-outline-secondary">View all RECEPTIONISTS</a>
                                        @endif
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
                                        <a href="javascript:void(0)" data-sort="js-lists-values-count">ID</a>
                                    </th>

                                    <th>
                                        <a href="javascript:void(0)" data-sort="js-lists-values-name">Name</a>
                                    </th>

                                    <th>
                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-company">
                                            Package
                                        </a>
                                    </th>
                                    <th>
                                        <a href="javascript:void(0)">

                                        </a>
                                    </th>
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
                                                {{ $member->member_details->package->name }}
                                            </div>
                                        </td>
                                        <td>
                                            @if (auth()->user()->isA('superadmin'))
                                                <a type="button" class="btn btn-secondary"
                                                    href="{{ route('members.edit', $member) }}">
                                                    <i class="material-icons">mode_edit</i>
                                                </a>
                                            @endif
                                            <a type="button" class="btn btn-primary"
                                                href="{{ route('members.show', $member) }}">
                                                <i class="material-icons">pageview</i>
                                            </a>
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
