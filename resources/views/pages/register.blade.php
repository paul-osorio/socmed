@extends('layout.layout')

@section('content')

<form action="{{ route('process/register') }}" method="post">
    @csrf
    <input type="text" name="first_name" id="first_name" placeholder="First Name">
    @if ($errors->has('first_name'))
        <div class="error">{{ $errors->first('first_name') }}</div>
    @endif

    <input type="text" name="last_name" id="last_name" placeholder="Last Name">
    @if ($errors->has('last_name'))
        <div class="error">{{ $errors->first('last_name') }}</div>
    @endif

    <input type="text" name="username" id="username" placeholder="Username">
    @if ($errors->has('username'))
        <div class="error">{{ $errors->first('username') }}</div>
    @endif


    <input type="email" name="email" id="email" placeholder="Email">
    @if ($errors->has('email'))
        <div class="error">{{ $errors->first('email') }}</div>
    @endif

    <input type="password" name="password" id="password" placeholder="Password">
    @if ($errors->has('password'))
        <div class="error">{{ $errors->first('password') }}</div>
    @endif

    <input type="submit" value="Register">
</form>

<a href="{{route('login')}}">Login</a>

{{Session::get('error') ? Session::get('error') : ''}}


@endsection

@push('js')
@endpush
