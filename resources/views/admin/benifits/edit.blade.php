@extends('layout.admin.app')

@section('content')
    <div class="page-section container page__container">
        <div class="page-separator">
            <div class="page-separator__text">Edit benefit</div>

        </div>
        @livewire('admin.benifit.edit', ['benefit' => $benefit])
    </div>
@endsection
@push('header')
    @livewireStyles
    @livewireScripts
@endpush
@push('footer')
@endpush
