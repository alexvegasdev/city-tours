@extends('partials.head')

@section('content')
    <section style="margin-top: 60px;">
      <h1>Home</h1>

      @auth
          <p>Welcome</p>
          <p>
              <a href="/logout">Logout</a>
          </p>
  
      @endauth
  
      @guest
          <p>
              <a href="/login">Login</a>
          </p>
      @endguest
    </section>
@endsection
