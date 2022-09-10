@extends('layout.admin.app')

@section('content')
    @livewire('location.category.index')
@endsection
@push('header')
    @livewireStyles
    @livewireScripts
@endpush
@push('footer')
@endpush
