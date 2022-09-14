@extends('layout.admin.app')

@section('content')
    <div class="page-section container page__container">
        <div class="page-separator">
            <div class="page-separator__text">Edit receptionist</div>

        </div>
        @livewire('admin.location.receptionist.edit', ['receptionist' => $receptionist])

        <div class="page-separator mt-4">
            <div class="page-separator__text">
                Login History
            </div>
        </div>
        @livewire('admin.users.authentication-log', ['user' => $receptionist])
    </div>
@endsection
@push('header')
    @livewireStyles
    @livewireScripts
@endpush
@push('footer')
@endpush
