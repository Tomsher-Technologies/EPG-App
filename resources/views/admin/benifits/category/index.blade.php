@extends('layout.admin.app')

@section('content')
    <div class="page-section container page__container">
        <div class="page-separator">
            <div class="page-separator__text">All Categories</div>

        </div>
        <div class="mb-2">
            <a class="btn btn-primary" href="{{ route('benefit.category.create') }}">Create New</a>
        </div>
        @livewire('admin.benifit.category.listing')
    </div>
@endsection
@push('header')
    @livewireStyles
    @livewireScripts
@endpush
@push('footer')
@endpush
