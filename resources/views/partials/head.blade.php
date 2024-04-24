<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.25' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><path d='M14.5 6.5l3 -2.9a2.05 2.05 0 0 1 2.9 2.9l-2.9 3l2.5 7.5l-2.5 2.55l-3.5 -6.55l-3 3v3l-2 2l-1.5 -4.5l-4.5 -1.5l2 -2h3l3 -3l-6.5 -3.5l2.5 -2.5l7.5 2.5z'/></svg>" type="image/svg+xml">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/variables.css', 'resources/css/app.css', 'resources/css/forms.css', 'resources/css/footer.css'])
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
                @if(auth()->check()) 
                    <a href="{{ route('user.edit') }}">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" /></svg>
                    
                    </a>
                    <a href="{{ route('logout') }}">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
                    </a>
                @else
                    <a href="{{ route('login.show') }}">Login</a> 
                @endif                
            </div>
        </nav>
    </header>
    @yield('content')


    <footer class="footer">
        <div class="footer__container bd-container">
            <h2 class="footer__title">City Tours</h2>
            <p class="footer__description">Encuentra tu próximo destino en nuestra plataforma de venta de paquetes turísticos: la aventura te espera.</p>

            <div class="footer__social">
                <a href="https://github.com/jaimescayetano" class="footer__link" target="_blank"><i class="bx bxl-github"></i></a>
                <a href="https://github.com/alexvegasdev" class="footer__link" target="_blank"><i class="bx bxl-github"></i></a>
            </div>
            <p class="footer__copy">&#169; 2024 Jaimes Cayetano - Angela Vegas. Todos los derechos reservados</p>
        </div>
    </footer>
</body>

</html>
