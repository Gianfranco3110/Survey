<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/estadistica.svg') }}">
    <link rel="shortcut icon" sizes="512x512" href="{{ asset('/img/estadistica.svg') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Encuestas</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h3>Encuestas venezuela</h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{ url('/') }}">{{ __('Inicio') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="#">{{ __('Estadisticas') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="#">{{ __('Contacto') }}</a>
                    </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="navbar-brand" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="navbar-brand" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route ('home')}}">
                                        <h5>Dashboard</h5>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <h5>Salir</h5>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
            @yield('home')
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
    <footer class="footer">
        <!-- Copyright -->
            <div class="text-center p-4" style="background-color: #00303f">
                <h4> © 2020 Copyright Encuestas venezuela</h4>
            </div>
            <!-- Copyright -->
        </footer>
</html>

<style>
    .navbar {
background:#cae4db!important;
}

footer{
        text-align: center;
        font-family: sans-serif;
        color: black;
        width: 100%;
        bottom: 0;
        position:relative;
        clear:both;   
             
    }

    .card-header{
        background-color: #cae4db !important; 
    }
    a{
        font-size:20px !important;

    }
</style>