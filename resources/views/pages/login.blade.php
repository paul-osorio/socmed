@extends('layout.layout')

@section('content')


<form action="{{ route('process/login') }}" method="post">
    @csrf
    <input type="text" name="email" id="email">
    <input type="password" name="password" id="password">
    <input type="submit" value="Login">
</form>
@if (Session::get('error'))
    <div class="error">{{ Session::get('error') }}</div>
@endif

@if(Session::get('success'))
    <div class="success">{{ Session::get('success') }}</div>
@endif

<a href="{{ route('register') }}">Register</a>



@endsection

@push('js')

@endpush
