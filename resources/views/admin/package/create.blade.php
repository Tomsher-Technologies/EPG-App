@extends('layout.admin.app')

@section('content')
<div class="page-section container page__container">
    <div class="page-separator">
        <div class="page-separator__text">Create new package</div>
    </div>
    @livewire('admin.package.create')
</div>
@endsection
@push('header')
@livewireStyles
@livewireScripts
@endpush
@push('footer')
@endpush