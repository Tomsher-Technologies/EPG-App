@extends('layout.admin.app')
@section('content')
    <div class="page-section container page__container">
        <div class="page-separator">
            <div class="page-separator__text">All Packages</div>
        </div>
        @livewire('admin.package.listing')
    </div>
@endsection
@push('header')
    @livewireStyles
    @livewireScripts
@endpush
@push('footer')
@endpush
