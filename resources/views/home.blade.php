@extends('partials.head')

@section('content')
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
                <div class="category category-1"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('{{ asset('images/nature.jpg') }}');">
                    <h3>Nature</h3>
                </div>
                <div class="category category-2"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('{{ asset('images/exotic.jpg') }}');">
                    <h3>Exotic</h3>
                </div>
                <div class="category category-3"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('{{ asset('images/adrenalin.jpg') }}');">
                    <h3>Adrenalin</h3>
                </div>
                <div class="category category-4"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('{{ asset('images/gastronomy.jpg') }}');">
                    <h3>Gastronomy</h3>
                </div>
                <div class="category category-5"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('{{ asset('images/culture.jpg') }}');">
                    <h3>Culture</h3>
                </div>
            </div>
        </section>
    </div>
@endsection
