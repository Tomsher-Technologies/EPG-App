@extends('layout.admin.app')

@section('content')
    <div class="page-section container page__container">
        <div class="page-separator">
            <div class="page-separator__text">All customers</div>
        </div>

        @livewire('member.listing')

    </div>
@endsection
@push('header')
    @livewireStyles
@endpush
@push('footer')
    @livewireScripts
@endpush
