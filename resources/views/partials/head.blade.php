<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>City Tours</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css', 'resources/css/footer.css'])
</head>

<body>
    <header class="header-fixed">
        <nav class="nav-bar">
            <a href="{{ route('homepage') }}" class="nav-logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-plane-tilt">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M14.5 6.5l3 -2.9a2.05 2.05 0 0 1 2.9 2.9l-2.9 3l2.5 7.5l-2.5 2.55l-3.5 -6.55l-3 3v3l-2 2l-1.5 -4.5l-4.5 -1.5l2 -2h3l3 -3l-6.5 -3.5l2.5 -2.5l7.5 2.5z" />
                </svg>
                <span>City Tours</span>
            </a>
            <div class="nav-redirects">
                <a href="{{ route('homepage') }}">Home</a>
                <a href="{{ route('homepage') }}#categories">Categories</a>
                <a href="{{ route('homepage') }}#packages">Packages</a>
                <a href="{{ route('homepage') }}#places">Places</a>
                <a href="{{ route('login.show') }}">Login</a>
            </div>
        </nav>
    </header>
    @yield('content')


    <footer class="footer">
        <div class="footer__container bd-container">
            <h2 class="footer__title">City Tours</h2>
            <p class="footer__description">Encuentra tu próximo destino en nuestra plataforma de venta de paquetes turísticos: la aventura te espera.</p>

            <div class="footer__social">
                <a href="#" class="footer__link"><i class="bx bxl-linkedin"></i></a>
                <a href="#" class="footer__link"><i class="bx bxl-github"></i></a>
                <a href="#" class="footer__link"><i class="bx bxl-codepen"></i></a>
            </div>
            <p class="footer__copy">&#169; 2024 Jaimes Cayetano - Angela Vegas. Todos los derechos reservados</p>
        </div>
    </footer>
</body>

</html>
