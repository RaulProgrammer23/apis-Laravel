@extends('layouts.app')
@section('content')

<h1>Login</h1>

<form action="{{ route('login') }}" method="POST">
    @csrf 

    <div>

        <label>
            <span>Email</span>
            <input type="email" name="email" value=" {{ old('email') }}">
            @error('email')
                <small>{{ $message }}</small>
            @enderror
        </label>

        <label>
            <span>Password</span>
            <input type="password" name="password" >
            @error('password')
                <small>{{ $message }}</small>
            @enderror
        </label>

        <label>
            <span>Password Confirmation</span>
            <input type="password" name="password_confirmation" >
            @error('password_confirmation')
                <small>{{ $message }}</small>
            @enderror
        </label>

        <label>
            <span>Recuerdame</span>
            <input type="checkbox" name="recuerdame" value=" {{ old('recuerdame') }}">
        </label>

    </div>



    <a href=" {{ route('register') }}">Register</a>
    <button type="submit">Login</button>

</form>

@endsection

