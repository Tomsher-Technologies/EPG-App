@extends('layout.admin.app')

@section('content')
    <div class="page-section container page__container">
        <div class="page-separator">
            <div class="page-separator__text">Edit admin user</div>

        </div>
        @livewire('admin.admin-users.edit', ['user' => $user])

        <div class="page-separator mt-4">
            <div class="page-separator__text">
                Login History
            </div>
        </div>
        @livewire('admin.users.authentication-log', ['user' => $user])
    </div>
@endsection
@push('header')
    @livewireStyles
    @livewireScripts
@endpush
@push('footer')
@endpush
