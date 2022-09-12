@extends('layout.admin.app')

@section('content')
    <div class="page-section container page__container">
        <div class="page-separator">
            <div class="page-separator__text">Create new location</div>
        </div>
        @livewire('admin.location.create')
    </div>
@endsection
@push('header')
    @livewireStyles
    @livewireScripts
@endpush
@push('footer')
@endpush
