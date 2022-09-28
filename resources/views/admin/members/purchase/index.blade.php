@extends('layout.admin.app')

@section('content')
    <div class="page-section container page__container">
        <div class="page-separator">
            <div class="page-separator__text">Create new purchase</div>
        </div>
        @livewire('admin.member.purchase.create', [
            'user' => $user,
        ])

        <div class="page-separator">
            <div class="page-separator__text">All Purchases</div>
        </div>
        <livewire:tables.user-purchase-table :user="$user"/>
    </div>
@endsection
@push('header')
    @livewireStyles
    @powerGridStyles

    @livewireScripts
    @powerGridScripts
@endpush
@push('footer')
<script>
    $('#test').on('click',function(){
        Livewire.emit('refresh-table');
    });
</script>
@endpush
