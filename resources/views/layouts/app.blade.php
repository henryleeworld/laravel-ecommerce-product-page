<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>{{ trans('shop.title') }}</title>

        @vite(['resources/sass/app.scss'])

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/shop-homepage.css') }}" rel="stylesheet" />
    </head>

    <body>
        <div id="app" class="d-flex flex-column min-vh-100">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ trans('shop.menu.home') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto"></ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">{{ trans('shop.menu.about') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('services') }}">{{ trans('shop.menu.services') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">{{ trans('shop.menu.contact') }}</a>
                            </li>
                            <!-- Authentication Links -->
                            @guest @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ trans('shop.menu.login') }}</a>
                            </li>
                            @endif @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('products.index') }}">{{ trans('shop.menu.products') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categories.index') }}">{{ trans('shop.menu.categories') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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
                <div class="container">
                    @yield('content')
                </div>
            </main>
            <!-- Footer -->
            <footer class="mt-auto py-5 bg-dark">
                <div class="container">
                    <p class="m-0 text-center text-white">{!! trans('shop.copyright') !!}</p>
                </div>
                <!-- /.container -->
            </footer>
        </div>
        <!-- Scripts -->
        @vite(['resources/js/app.js'])
    </body>
</html>
