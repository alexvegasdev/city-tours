@extends('partials.head')

@section('content')
    <div class="cn-form">
        <form action="/register" method="POST" class="form register-height">
            @csrf
            <h1>
                Register
            </h1>

            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" class="@error('firstname') is-invalid @enderror input">
            @error('firstname')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" class="@error('lastname') is-invalid @enderror input">
            @error('lastname')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="phone">Phone</label>
            <input type="tel" name="phone" id="phone" class="@error('phone') is-invalid @enderror input">
            @error('phone')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="@error('email') is-invalid @enderror input">
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror input">
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <input type="submit" value="Register" class="btn">
            <p>
                Do you have an account? <a href="{{ route('login.show') }}">Login</a>
            </p>
        </form>
    </div>
@endsection
