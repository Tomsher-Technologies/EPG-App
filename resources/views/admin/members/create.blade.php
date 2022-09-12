@extends('layout.admin.app')

@section('content')
<div class="page-section container page__container">
    <div class="page-separator">
        <div class="page-separator__text">Create new customer</div>
    </div>

    @livewire('admin.member.create')

</div>
@endsection
@push('header')
@livewireStyles
@livewireScripts
@endpush
@push('footer')
@endpush