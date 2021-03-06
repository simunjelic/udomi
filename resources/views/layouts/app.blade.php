<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>udomi</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{url('/images/tabLogo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body style="background-image:url({{ url('images/paw2.png') }})">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{url('/images/udomilogo.png')}}" alt="udomi" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : ''; }}" aria-current="page" href="{{ url('/') }}">Po??etna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('onama') ? 'active' : '' }}" href="{{ url('onama') }}">O nama</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::is('posts') ? 'active' : ''; }}" href="{{ url('posts') }}">Udomi</a>
                        </li>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('login') ? 'active' : ''; }}" href="{{ route('login') }}">{{ __('Prijava') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('register') ? 'active' : ''; }}" href="{{ route('register') }}">{{ __('Registracija') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @can('is-admin')
                                    <a class="dropdown-item" href="{{ route('admin.users.index') }}"><i class="bi bi-gear"></i> Admin Panel</a>
                                    @endcan
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-right"></i> {{ __('Odjava') }}
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
            @include('layouts.messages')
            @yield('content')
        </main>

        <!--Footer-->

      <footer class="footer @isset($dno) fixed-bottom @else static-bottom @endisset bg-primary text-center text-lg-start text-white mt-5 " 
      @isset($skriveno)
          style="display: none"
      @endisset>
        
        <div class="container text-center p-3" >
          ?? 2021 Copyright:
          <a class="text-light" href="{{ url('/') }}">udomi.ba</a>
        </div>
        
      </footer>
    </div>
</body>
</html>
