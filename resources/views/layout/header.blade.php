<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/icon.svg') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/details.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/properties.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap-icon.css')}}"/>

    <title>@yield('title')</title>
</head>
<body>
    {{-- <header>
        
        @if (Route::has('login'))
                <div class="header-bar">
                    @auth
                    <div>
                        <a href="{{ url('/') }}" >Home</a>
                        @if(auth()->check() && auth()->user()->is_admin)
                            <a href="{{ route('dashboard.index') }}" >Dashboard</a>
                        @endif
                        <a href="{{ route('student.index') }}" >Student</a>
                    </div>
                    @if(auth()->check() && auth()->user()->username === null)
                    
                            <h2>{{ auth()->user()->email }}</h2>
                        @else
                        <h2>{{ auth()->user()->username }}</h2>
                  
                    @endif
                    
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                        
                    @else
                        <a href="{{ route('login') }}" >Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    
                    @endauth
                </div>
            @endif

    </header> --}}

    <section class="header">
        <header class="header-container container">
          <div class="logo">
            <a href="#"><img src="{{asset('img/logo.svg')}}" alt="Booking4U"></a>
          </div>
          <nav class="menu">
            <ul class="nav-lists">
                <li class="nav-items"><a href="">Hotels</a></li>
                <li class="nav-items"><a href="">Resorts</a></li>
                <li class="nav-items"><a href="">Guest Houses</a></li>
                <li class="nav-items"><a href="">Holiday Homes</a></li>
            </ul>
          </nav>
          <div class="search-bar">
            <input type="text" name="search" id="search" placeholder="Search...">
            <button class="btn-search">
                <i class="fa fa-search"></i>
            </button>
          </div>
          <div class="button-container">
                <button class="btn-search hidden">
                    <i class="fa fa-search"></i>
                </button>
                @if (Auth::check())
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn-login">Logout</button>
                </form>
                <!-- <h2>{{ auth()->user()->email }}</h2> -->
                    @else
                        <a href="{{ route('login') }}" class="btn-login hidden">
                            <i class="bi bi-person-circle"></i>                 
                        </a>
                    @endif
                <span class="toggle"><i class="bi bi-list"></i></span>
            </div>
        </header>
      </section>