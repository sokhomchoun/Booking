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
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/log-off.css' rel='stylesheet'>
    <title>@yield('title')</title>
</head>
<body>

    <nav>
      <div class="nav-bar container">
        <i class='bi bi-list sidebarOpen' ></i>
        <span class="logo navLogo"><a href="/">
            <img src="{{asset('img/logo.svg')}}" width="170px"/>
        </a></span>

        <div class="menu">
          <div class="logo-toggle">
            <span class="logo"><a href="#">
            <img src="{{asset('img/logo.svg')}}" width="170px"/>
            </a></span>
            <i class='bi bi-x siderbarClose'></i>
          </div>

            <ul class="nav-links">
                @foreach ($category as $item)
                    <li><a href="{{ url('filltercategory/'.$item->category_name) }}">{{ $item->category_name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="button-container">
            <div class="searchBox">
            <div class="searchToggle">
                <i class='bi bi-x cancel'></i>
                <i class='bi bi-search search'></i>
            </div>

            <div class="search-field" style="background: white; padding-bottom:19px;">
                <form action="{{ route('search') }}" method="GET">
                    <input type="text" name="query" id="searchInput" placeholder="Search...">
                    <i class='bi bi-search' style="margin-top: -4px"></i>
                </form>

            </div>
        </div>
        @if (Auth::check())
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn-logout">
                    <i class="gg-log-off"></i>
                </button>
            </form>
            <!-- <h2>{{ auth()->user()->email }}</h2> -->
            @else
                <a href="{{ route('login') }}" class="btn-login">
                    <i class="bi bi-person-circle"></i>                 
                </a>
            @endif
        </div>
    </nav>