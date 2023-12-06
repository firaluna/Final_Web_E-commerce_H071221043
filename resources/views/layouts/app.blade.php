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
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container">


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <a class="navbar-brand " href="{{ url('/') }}">
                            <img style="height: 80px" src="img/logo.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <ul class="navbar-nav me-auto">
                            <li class="nav-item pt-1">
                                <a style="color: #BBAB8C" class="nav-link" href="/Listproduct">Products</a>
                            </li>
                        </ul>

                        {{-- <div class="input-bar search">
                            <div class="input-bar-search" id="search-input">
                                <input class="search-bar search-bar__desktop" placeholder="Cari Sofa" value="">
                                <button class=" button  button--big button__primary  button__primary-ruparupa" style="width:52px;background-color:;color:;max-width:" type="button">
                                <div class="search-bar__button"><img class="search-icon" src="https://assets.ruparupa.io/v3/static/homepage/desktop/icon/search.svg">
                                </div>
                            </button>
                        </div>
                    </div> --}}

                        <form class="d-flex pt-1" role="search" action="/pencarian" method="GET">
                            <input style="width: 600px;" class="form-control " type="search" name="jenis" placeholder="Search Product"
                                aria-label="Search">
                            <button class="btn " type="submit">
                                <ion-icon size="large" style="color: #BBAB8C" name="search"></ion-icon>
                            </button>
                        </form>


                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            {{-- <ul class="navbar-nav me-auto">
                                <li class="nav-item pt-1">
                                    <a style="color: #BBAB8C" class="nav-link" href="/Listproduct">Products</a>
                                </li>
                            </ul> --}}
                            <li class="nav-item">
                                <a style="color: #BBAB8C" class="nav-link" href="/"><ion-icon size="large" name="heart-outline"></ion-icon></a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #BBAB8C" class="nav-link" href="/"><ion-icon size="large" name="cart-outline"></ion-icon></a>
                            </li>


                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item ">
                                        <button style="background-color: #9BABB8; " type="button" class="btn btn-sm ">
                                            <a style="color: #EEE3CB;" class="nav-link"  href="{{ route('login') }}">{{ __('Login') }} </a>
                                        </button>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item ">
                                        <button style="background-color: #9BABB8; margin-left:4px;" type="button" class="btn btn-sm">
                                            <a style="color: #EEE3CB" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </button>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <main >
            @yield('content')
        </main>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
