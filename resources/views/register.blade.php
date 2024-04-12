@extends('partials.head')

@section('content')
    <div class="container-form">
        <form action="/register" method="POST" class="form register">
            @csrf
            <h1>
                Register
            </h1>
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" class="input">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" class="input">
            <label for="phone">Phone</label>
            <input type="tel" name="phone" id="phone" class="input">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="input">

            <input type="submit" value="Register" class="button">

            <p>
                  Do you have an account? <a href="{{ route('login.show') }}">Login</a>
            </p>
        </form>
    </div>
@endsection
