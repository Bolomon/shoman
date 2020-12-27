<!DOCTYPE html>
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
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="img/icons/favicon.png">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">

                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="navbar-nav ml-auto"> -->
                        <!-- Authentication Links -->
                        <!-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->
        @if(Auth::check())
        <header class="header">
            <div>
                <label for="menu"><img src="img/icons/menu.svg" alt="menu"></label>
                <input type="checkbox" id="menu" class="menu-open">

                <div class="left-sidebar">
                    <img src="img/Logo.svg" class="logo" alt="Sciety">
                    <ul class="nav">
                        <li class="nav__item">
                            <img src="img/icons/Ratings.svg" alt="Ratings" class="nav__item-icon">
                            <a href="/rates" class="nav__item-link">Журнал оценок</a>
                        </li>

                        <li class="nav__item">
                            <img src="img/icons/Profile.svg" alt="Profile" class="nav__item-icon">
                            <a href="/profile" class="nav__item-link">Профиль</a>
                        </li>
                        <li class="nav__item">
                          <a class="nav__item-link" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                        </li>

                    </ul>
                </div>
            </div>
            <div>
                <label for="filter"><img src="img/icons/filter.svg" alt="filter"></label>
                <input type="checkbox" id="filter" class="filter-open">

                <div class="right-sidebar">
                    <h2 class="page-title">Предмет</h2>
                    <ul class="lesson__list">
                        <li class="lesson__list-item bg">Русский язык</li>
                        <li class="lesson__list-item bg">Математика</li>
                        <li class="lesson__list-item bg">Информатика</li>
                        <li class="lesson__list-item bg">Английский язык</li>
                    </ul>
                    <h2 class="page-title">Преподаватель</h2>
                    <ul class="lesson__list">
                        <li class="lesson__list-item bg">Фамилия Имя Отчество</li>
                        <li class="lesson__list-item bg">Фамилия Имя Отчество</li>
                        <li class="lesson__list-item bg">Фамилия Имя Отчество</li>
                        <li class="lesson__list-item bg">Фамилия Имя Отчество</li>
                    </ul>
                </div>
            </div>
        </header>
        @endif
        <main class="py-4">
            @yield('content')
        </main>
</div>
</body>
</html>
