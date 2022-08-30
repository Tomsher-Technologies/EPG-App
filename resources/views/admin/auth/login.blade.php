@extends('layout.admin.app')

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="email" name="email" value="admin@epg.com" id="">
        <input type="password" name="password" value="password" id="">
        <input type="submit" value="Login">
    </form>
@endsection