@extends('partials.head')

@section('content')
    {{ storage_path() }}
    <div class="cn">
        <section class="cn-main">
            <img class="main-image" src="{{ asset('images/main.jpg') }}">

            <div class="cn-info">
                <div class="cn-vision">
                    <h1>CITY TOURS</h1>
                    <p>
                        Embárcate en un viaje lleno de descubrimientos con nuestras experiencias turísticas guiadas: desde
                        los monumentos emblemáticos hasta los rincones escondidos, nuestros paquetes turísticos te llevarán
                        a explorar la auténtica esencia de cada destino, brindándote recuerdos inolvidables en cada paso del
                        camino
                    </p>
                </div>

                <div class="cn-social">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-x">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                        </svg>
                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                        </svg>
                    </a>

                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M16.5 7.5l0 .01" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <section id="categories" class="cn-categories">
            <h2 class="sub-title">
                What would you like?
            </h2>
            <div class="grid-categories">
                @foreach ($categories as $category)
                    <a class="category {{ 'category-' . $loop->iteration }}" href=""
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('{{ asset('storage/' . $category->image) }}');">
                        <h3>{{ $category->name }}</h3>
                    </a>
                @endforeach
            </div>
        </section>

        <section id="packages"class="cn-packages">
            <h2 class="sub-title">
                Packages
            </h2>
            <div class="grid-packages">
                @foreach ($packages as $package)
                    <a class="card-package">
                        <img src="{{ asset('storage/' . $package->place->pictures->first()->path) }}"
                            alt="{{ $package->name }}">
                        <div class="cn-information">
                            <h3>{{ $package->name }}</h3>
                            <div class="row">
                                <p>Duration: {{ $package->duration }} days</p>
                                <p class="cn-fx-center">
                                    {{ $package->rating }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                    </svg>
                                </p>
                            </div>
                            <div>
                                <b>Benefits:</b> 
                                @foreach ($package->benefits as $benefit)
                                    <p>✔ {{ $benefit->title }}</p>
                                @endforeach
                            </div>
                            <span>{{ $package->price }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>

        <section id="places" class="cn-places">
            <h2 class="sub-title">
                Places
            </h2>
            <div class="grid-places">

                @foreach ($places as $place)
                    <div>{{ $place->name . ': ' . $place->description }}</div>
                @endforeach
            </div>
        </section>

    </div>
@endsection
