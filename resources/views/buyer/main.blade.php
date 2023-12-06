<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <a class="navbar-brand" href="{{ url('buyer') }}">
                        <img style="height: 85px" src="img/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    {{-- <ul class="navbar-nav ">
                        <li class="nav-item pt-1">
                            <a style="color: #BBAB8C" class="nav-link" href="/products">Products</a>
                        </li>
                    </ul> --}}

                    <form style="padding-top: 3px;" class="d-flex ms-auto" role="search" action="/search" method="GET">
                        <input style="width: 800px;"  class="form-control" type="search" name="jenis" placeholder="Search Product"
                        aria-label="Search">
                        <button class="btn " type="submit">
                            <ion-icon size="large" style="color: #BBAB8C" name="search"></ion-icon>
                        </button>
                    </form>


                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ms-auto">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a style="color: #BBAB8C" class="nav-link" href="/like"><ion-icon size="large" name="heart-outline"></ion-icon></a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #BBAB8C" class="nav-link" href="/cart"><ion-icon size="large" name="cart-outline"></ion-icon></a>
                            </li>
                        </ul>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a style="color: #BBAB8C" id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <ion-icon size="large" name="person-circle-outline"></ion-icon>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a id="navbarDropdown" class="dropdown-item " href="{{ route('buyerdashboard') }}" role="button">
                                        My Account
                                        {{-- {{ Auth::user()->name }} --}}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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

        <main>
            @yield('content')
        </main>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
