@extends('layout.admin.app')

@section('content')
    <div class="page-section container page__container">
        <div class="page-separator">
            <div class="page-separator__text">Edit Category</div>

        </div>
        @livewire('admin.benifit.category.edit', ['category' => $benefitCategory])
    </div>
@endsection
@push('header')
    @livewireStyles
    @livewireScripts
@endpush
@push('footer')
@endpush
