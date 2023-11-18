<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('support/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('support/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('support/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav nav-tabs custom-nav" style="--bs-nav-link-color: black">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'home' ? 'active' : '' }}"
                                href="{{ route('home') }}">
                                <i class="bi bi-house"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'category' ? 'active' : '' }}"
                                href="{{ route('category') }}">
                                <i class="bi bi-grid-3x3-gap"></i> Category
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'variant' ? 'active' : '' }}"
                                href="{{ route('variant') }}">
                                <i class="bi bi-puzzle"></i> Variant
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'product' ? 'active' : '' }}"
                                href="{{ route('product') }}">
                                <i class="bi bi-shop"></i> Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'order' ? 'active' : '' }}"
                                href="{{ route('order') }}">
                                <i class="bi bi-cart"></i> Order
                            </a>
                        </li>
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
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        <main class="py-4 px-3">
            @yield('content')
        </main>
    </div>

    <div class="modal" tabindex="-1" id="mymodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>

<script>
    const formatCurrency = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
    });
</script>
