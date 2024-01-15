<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vanse academy</title>

    <!---added--->
    <!--- favicon-->
    <link rel="shortcut icon" href="{{ asset('') }}" type="image/svg+xml">

    <!--- custom css link-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!---google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!---upadete upwards--->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <!---#HEADER-->

    <header class="header" data-header>

        <div class="overlay" data-overlay></div>

        <div class="header-top">
            <div class="container">

                <ul class="header-top-list">

                    <li>
                        <a href="mailto:vansejizzy20@gmail.com" class="header-top-link">
                            <ion-icon name="mail-outline"></ion-icon>

                            <span>vansejizzy20@gmail.com</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="header-top-link">
                            <ion-icon name="location-outline"></ion-icon>

                            <address>Thika, 4 Garrisa Road</address>
                        </a>
                    </li>

                </ul>

                <div class="wrapper">
                    <ul class="header-top-social-list">

                        <li>
                            <a href="#" class="header-top-social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="header-top-social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="header-top-social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="header-top-social-link">
                                <ion-icon name="logo-pinterest"></ion-icon>
                            </a>
                        </li>

                    </ul>

                    <button class="header-top-btn">Make a changes</button>
                </div>
                <div class="wrapper">
                    @if (Route::has('login'))
                        <div class="header-top-list">
                            @auth
                                <a href="{{ url('/home') }}" class="header-top-social-link">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="header-top-social-link">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="header-top-social-link">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>

            </div>
        </div>

        <div class="header-bottom">
            <div class="container">

                <a href="/" class="logo">
                    <img src="{{ asset('images/vanseheader.png') }}" alt="logoheader logo">
                </a>

                <nav class="navbar" data-navbar>

                    <div class="navbar-top">

                        <a href="#" class="logo">
                            <img src="{{ asset('images/vanseheader.png') }}" alt="logoheader logo">
                        </a>

                        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                            <ion-icon name="close-outline"></ion-icon>
                        </button>

                    </div>

                    <div class="navbar-bottom">
                        <ul class="navbar-list">

                            <li>
                                <a href="/" class="navbar-link" data-nav-link>Home</a>
                            </li>
                            <li>
                                <a href="services" class="navbar-link" data-nav-link>Courses</a>
                            </li>
                            <li>
                                <a href="about" class="navbar-link" data-nav-link>About</a>
                            </li>
                            <!--<li>
                                <a href="projects" class="navbar-link" data-nav-link>Projects</a>
                            </li>--->
                            <li>
                                <a href="blog" class="navbar-link" data-nav-link>Blog</a>
                            </li>

                            <li>
                                <a href="contact" class="navbar-link" data-nav-link>Contact</a>
                            </li>

                        </ul>
                    </div>

                </nav>

                <div class="header-bottom-actions">

                    <button class="header-bottom-actions-btn" aria-label="Search">
                        <ion-icon name="search-outline"></ion-icon>

                        <span>Search</span>
                    </button>


                    <button class="header-bottom-actions-btn" aria-label="Cart">
                        <ion-icon name="cart-outline"></ion-icon>

                        <span>Cart</span>
                    </button>

                    <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
                        <ion-icon name="menu-outline"></ion-icon>

                        <span>Menu</span>
                    </button>

                </div>

            </div>
        </div>
    </header>
    <!------end of header---->
