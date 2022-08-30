@extends('layout.admin.app')

@section('content')
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" value="Logout">
    </form>
@endsection
