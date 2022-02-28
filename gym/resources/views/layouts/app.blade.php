<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        body{
            margin: 50px;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm navbar-fixed-top">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="/users/create">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            @if(Auth::user()->role_id==3)
            <div class="nav-item">
                <br>
                <div class="col-lg-12" style="background-color: grey; padding:10px; position: fixed;left:0px; top:0px">
                    <a style="padding:5px; color:white;" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <a href="/users" style="padding:5px; color:white;">Users</a>
                    <a href="/activities" style="padding:5px; color:white;">Actividades</a>
                    <a href="/sessions/create" style="padding:5px; color:white;">Sesiones</a>
                    <a href="/bookings" style="padding:5px; color:white;">Bookings</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="float:right; color:white;">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            @elseif(Auth::user()->role_id==1)

            <div class="nav-item navbar-fixed-right">
                <br>
                <div class="col-lg-12" style="background-color: grey; padding:10px; position: fixed;left:0px; top:0px">
                    <a style="padding:5px; color:white;" href="#" role=" button" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <a href="/bookings/create" style="padding:5px; color:white;">Reservar por actividad</a>
                    <a href="/bookings/date" style="padding:5px; color:white;">Reservar por fecha</a>
                    <a href="/activity" style="padding:5px; color:white;">Actividades</a>
                    <a href="/users/{{ Auth::user()->id }}" style="padding:5px; color:white;">Datos usuario</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="float:right; color:white;">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            @endif
            @endguest
            </ul>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>