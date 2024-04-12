@extends('partials.head')

@section('content')
    <div class="container-form">
        <form action="{{ route('login.store') }}" method="POST" class="form">
            @csrf
            <h1>
                  Login
            </h1>

            <label for="email">Email</label>
            <input required class="input" type="email" name="email" id="email">

            <label for="password">Password</label>
            <input required class="input" type="password" name="password" id="password">
            <div class="error-message">Fields is invalid</div>

            <input class="button" type="submit" value="Login">

            <p>
                  Don't have an account? <a href="{{ route('register.store') }}">Register</a>
            </p>
        </form>
    </div>
@endsection
