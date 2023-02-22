<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>G'Five Rentals</title> 


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
    integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"
    integrity="sha512-f28cvdA4Bq3dC9X9wNmSx21rjWI+5piIW/uoc2LuQ67asKxfQjUow2MkcCNcfJiaLrHcGbed1wzYe3dlY4w9gA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css"
    integrity="sha512-b42SanD3pNHoihKwgABd18JUZ2g9j423/frxIP5/gtYgfBz/0nDHGdY/3hi+3JwhSckM3JLklQ/T6tJmV7mZEw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    
</head>
<body>
<div class="container-fluid" id="header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/')}}">
                <img
                    src="{{ asset('./images/G5-Logo-B-White-on-Black-Border-V1.png') }}"
                    alt="Logo"
                    width="200"
                    height="100"
                    class="d-inline-block align-text-top"
                />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            aria-current="page"
                            href="{{ url('/')}}"
                            >Home</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            aria-current="page"
                            href="{{ url('/carmodel')}}"
                            >Vehicles</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/terms')}}">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/aboutus') }}"
                            >About Us</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contactus') }}"
                            >Contact Us</a
                        >
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" id="button" href="{{ route('login') }}"
                            >{{ __('Login') }}</a
                        >
                    </li>
                    @endif @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" id="button" href="{{ route('register') }}"
                            >{{ __('Register') }}</a
                        >
                    </li>
                    @endif @else
                    <li class="nav-item dropdown">
                        <a
                            id="navbarDropdown"
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            v-pre
                        >
                            {{ Auth::user()->name }}
                        </a>

                        <div
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="navbarDropdown"
                        >
                            <a
                                class="dropdown-item"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"
                            >
                                {{ __('Logout') }}
                            </a>

                            <form
                                id="logout-form"
                                action="{{ route('logout') }}"
                                method="POST"
                                class="d-none"
                            >
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>

            @yield('content')
         
    
        <footer class="footer" id="foorear">
        <div class="container">
            <footer class="py-5">
                <div class="row">

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Rental Car Types</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#foorear" class="nav-link p-0 ">Luxury Car
                                    Rental</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#foorear" class="nav-link p-0 ">Pickup Truck
                                    Rental</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#foorear" class="nav-link p-0 ">Van Rental</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#foorear" class="nav-link p-0 ">SUV Rental</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#foorear" class="nav-link p-0 ">Rental Car
                                    Sizes — Sedans</a>
                            </li>
                        </ul>
                    </div>
                    


                    <div class="col-md-5 offset-md-1 mb-3" style="margin-left: 33%;">
                        <form>
                            <h5>Subscribe to our newsletter</h5>
                            <p>
                                Monthly digest of what's new and exciting
                                from us.
                            </p>
                                
                                <br />
                            <div class="wrapper">
                                <a class="button" href="#foorear">
                                    <div class="icon"><i class="fa fa-facebook-f"
                                            style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                                    <span style="color: #4400ff">Facebook</span>
                                </a>
                                <a class="button" href="#foorear">
                                    <div class="icon"><i class="fa fa-instagram"
                                            style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                                    <span style="color: #833AB4">Instagram</span>
                                </a>
                                <a class="button" href="#foorear">
                                    <div class="icon"><i class="fa fa-twitter"
                                            style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                                    <span style="color: #1DA1F2">Twitter</span>
                                </a>
                                <a class="button" href="#foorer">
                                    <div class="icon"><i class="fa fa-youtube-play"
                                            style=" font-size:34px;color:rgb(255, 255, 255)"></i></div>
                                    <span style="color: #fc0303">YouTube</span>
                                </a>
                                <a class="button" href="#foorear">
                                    <div class="icon">
                                        <i class="fa fa-google" style="font-size:40px;color:rgb(255, 255, 255)"></i>
                                    </div>
                                    <span style="color: #176af0">Google</span>
                                </a>
                            </div>

                        </form>

                    </div>
                    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                        <p>© 2022 G' Five | Company, Inc. All rights reserved.</p>
                        <ul class="list-unstyled d-flex">
                            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                        <use xlink:href="#twitter"></use>
                                    </svg></a></li>
                            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                        <use xlink:href="#instagram"></use>
                                    </svg></a></li>
                            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                        <use xlink:href="#facebook"></use>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>


            </footer>
        </div>
    </footer>   

    




<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                crossorigin="anonymous"></script>

  <script>
                window.onscroll = function () {
                    var header = document.getElementById("header");
                    if (window.pageYOffset > 0) {
                        header.classList.add("sticky");
                    } else {
                        header.classList.remove("sticky");
                    }
                };
                </script>  
        
</body>
</html>

