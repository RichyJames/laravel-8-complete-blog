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
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <!-- Header -->
<header class="bg-blue-900 py-6">
    <div class="container mx-auto flex justify-between items-center px-6">
        <div>
            <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
            <ul class="flex items-center">
                <li class="mr-6">
                    <a href="{{ route('contact') }}" class="text-gray-300 hover:text-white">Contact</a>
                </li>
                @guest
                    <li class="mr-6">
                        <a href="{{ route('login') }}" class="text-gray-300 hover:text-white">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}" class="text-gray-300 hover:text-white">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="mr-6">{{ Auth::user()->name }}</li>
                    <li>
                        <a href="{{ route('logout') }}" class="text-gray-300 hover:text-white"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endguest
            </ul>
        </nav>
    </div>
</header>

        @yield('content')
        <div class="footer-wrapper">
        <footer class="bg-gray-800 py-20 mt-20">
            <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2 border-gray-700">
                <div>
                    <h3 class="text-l sm:font-bold text-gray-100">
                        Pages
                    </h3>

                    <ul class="py-4 sm:text-s pt-4 text-gray-400">
                        <li class="pb-1">
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/blog">
                                Blog
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/login">
                                Login
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/register">
                                Register
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-l sm:font-bold text-gray-100">
                        Find Us
                    </h3>

                    <ul class="py-4 sm:text-s pt-4 text-gray-400">
                        <li class="pb-1">
                            <a href="/">
                                What we do
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/">
                                Address
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/">
                                Phone
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-l sm:font-bold text-gray-100">
                        Latest posts
                    </h3>

                    <ul class="py-4 sm:text-s pt-4 text-gray-400">
                        <li class="pb-1">
                            <a href="/">
                                Why we love tech
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/">
                                Why we love design
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/">
                                Why to use Laravel
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/">
                                Why PHP is the best
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6">
                Copyright 2017-2021 Code With Dary. All Rights Reserved
            </p>
        </footer>
        </div>
    </div>
</body>
</html>
