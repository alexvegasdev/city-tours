@extends('partials.head')

@section('content')
    <div class="container-form">
        <form action="{{ route('login.store') }}" method="POST" class="form">
            @csrf
            <h1>
                Login
            </h1>

            <label for="email">Email</label>
            <input class="@error('email') is-invalid @enderror input" type="email" name="email" id="email">
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="password">Password</label>
            <input class="@error('email') is-invalid @enderror input" type="password" name="password" id="password">
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror


            <input class="button" type="submit" value="Login">
            <p>
                Don't have an account? <a href="{{ route('register.store') }}">Register</a>
            </p>
        </form>
    </div>
@endsection
