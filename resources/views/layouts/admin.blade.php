<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div id="app">

        <div class="container-fluid vh-100">
            <div class="row h-100">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark navbar-dark sidebar collapse">
                    <div class="position-sticky pt-3">
                        <div class="wherefood_logo">
                            <img src={{asset("storage/img/WHEREFOOD.png")}} alt="wherefood_logo">
                        </div>
                        @if (Auth::check())
                            <div class="text-center mb-4">
                                    <div class="text-white mt-2">Benvenuto/a, {{ Auth::user()->name }}</div>                                 
                                    <div class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa-solid fa-sign-out-alt fa-lg fa-fw"></i> {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                        @endif
                        
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/">
                                    <i class="fa-solid fa-home-alt fa-lg fa-fw"></i> Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}" href="{{route('admin.dashboard')}}">
                                    <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.restaurants.index' ? 'bg-secondary' : '' }}" href="{{route('admin.restaurants.index')}}">
                                    <i class="fa-solid fa-utensils"></i> Ristorante
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.products.index' ? 'bg-secondary' : '' }}" href="{{route('admin.products.index')}}">
                                    <i class="fa-solid fa-burger fa-lg fa-fw"></i> Prodotti
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.products.create' ? 'bg-secondary' : '' }}" href="{{route('admin.products.create')}}">
                                    <i class="fa-solid fa-plus fa-lg fa-fw"></i> Nuovo prodotto
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.orders.index' ? 'bg-secondary' : '' }}" href="{{route('admin.orders.index')}}">
                                    <i class="fa-solid fa-cart-arrow-down fa-lg fa-fw"></i> Dettagli Ordine
                                </a>
                            </li>

                        </ul>

                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
            </div>
        </div>

    </div>
</body>

</html>

<style>
    .wherefood_logo img{
        width: 100%;
    }
</style>