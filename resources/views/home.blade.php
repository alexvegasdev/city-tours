@extends('partials.head')

@section('content')
      {{-- <h1>Home</h1>

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
      @endguest --}}

      <div class="description">
            <div class="image-description">
                  <img src="https://images.pexels.com/photos/2928116/pexels-photo-2928116.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>

            <div class="container-description">
                  <p class="title">CITY TOURS</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id officiis adipisci quibusdam, sed rerum tempora iure omnis pariatur modi deleniti cupiditate suscipit, natus quis quasi nihil labore? Labore, dicta natus.</p>
                  <section class="container-social">
                        <a href="">
                              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4l11.733 16h4.267l-11.733 -16z" /><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" /></svg>
                        </a>

                        <a href="">
                              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                        </a>

                        <a href="">
                              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M16.5 7.5l0 .01" /></svg>
                        </a>
                        
                  </section>
            </div>
            
      </div>

      @endsection