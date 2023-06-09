<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/cssShafwan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/zulfan.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/zulfan.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- CSS -->
    <style>
        body {
            font-family: 'Poppins';
        }
    </style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    ternakConnect
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ url('/about_us') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ url('/FAQ') }}">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ url('/blog') }}">Blog</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <button class="button2 rounded-pill px-3 mx-2 "><a class="nav-link btn" href="{{ route('login') }}">{{ __('Login') }}</a></button>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <button class="rounded-pill px-3 button1"><a class="nav-link btn" href="{{ route('register') }}">{{ __('Register') }}</a></button>
                        </li>
                        @endif
                        @else
                            @if (Auth::user()->role == 'peternak')
                            <li class="nav-item">
                                <button class="button2 rounded-pill px-3 mx-2 "><a class="nav-link btn" href="{{ url('/dashboardPeternak') }}">Dashboard</a></button>
                            </li>
                            @elseif (Auth::user()->role == 'investor')
                            <li class="nav-item">
                                <button class="button2 rounded-pill px-3 mx-2 "><a class="nav-link btn" href="{{ url('/dashboard') }}">Dashboard</a></button>
                            </li>
                            @endif

                        @if (Auth::user()->username == 'ADMIN')
                        <li class="nav-item">
                            <button class="button2 rounded-pill px-3 mx-2 dashboardAdmin">
                                <a class="nav-link btn" href="{{ url('/dashboardAdmin') }}">Admin Dash</a>
                            </button>
                        </li>
                        @endif

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>