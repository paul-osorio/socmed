@extends('layout.layout')

@section('content')

FOR LOGIN USERS ONLY

<a href="{{ route('logout') }}">Logout</a>


@endsection

@push('js')

@endpush
