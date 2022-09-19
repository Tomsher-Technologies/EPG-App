@extends('layout.admin.app')

@section('content')
    <div class="page-section container page__container">
        <div class="page-separator">
            <div class="page-separator__text">All Benefits</div>
        </div>
        @livewire('admin.benifit.listing')
    </div>
@endsection
@push('header')
    @livewireStyles
    @livewireScripts
    <style>
        .table-nowrap th {
            white-space: unset;
        }
    </style>
@endpush
@push('footer')
@endpush
