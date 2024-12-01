<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./cdn.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href=" {{asset("assets/css/bootstrap.min.css")}} " type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/font-awesome.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/elegant-icons.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/plyr.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/nice-select.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/owl.carousel.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/slicknav.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}" type="text/css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <style>
        .accordion-button {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    transition: all 0.3s ease-in-out;
}

.accordion-button:hover {
    background-color: #eef2ff;
    color: #0d6efd;
}

.accordion-item {
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
    <header class="header bg-dark text-white py-3">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-6 col-md-2">
                <a href="/" class="text-white text-decoration-none" style="font-size: 1.5rem; font-weight: bold;">
                    TaloWadaag
                </a>
            </div>

            <!-- Navigation -->
            <div class="col-6 col-md-10">
                <nav class="d-none d-md-flex justify-content-end">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="{{route("home")}}" class="nav-link text-white" href="#about">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#services">Adeegyadeena</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#testimonials">Ra'yiga Dadka</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#contact">Nala Soo Xiriir</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('likedshowsposts') }}">Your liked posts</a>
                                    <a class="dropdown-item" href="{{ route('writeposts') }}">Write Posts</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="d-md-none text-end">
                    <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu" aria-expanded="false">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="collapse" id="mobileMenu">
            <ul class="nav flex-column">
                <li class="nav-item"><a href="{{route("home")}}" class="nav-link text-white" href="#about">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#services">Adeegyadeena</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#testimonials">Ra'yiga Dadka</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#contact">Nala Soo Xiriir</a></li>
                @guest
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('register') }}">Register</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('login') }}">Login</a></li>
                @else
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('likedshowsposts') }}">Your liked posts</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('writeposts') }}">Write Posts</a></li>
                    <li class="nav-item">
                         <a class="dropdown-item" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                @endguest
            </ul>
        </div>
    </div>
</header>



       
    </div>

    <div>
    <main class="py-4" style="background-color:white">
            @yield('content')
        </main>
    </div>


    <footer class="footer bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <!-- About Us Section -->
            <div class="col-md-4 col-12 mb-3">
                <h5 class="text-uppercase">Ku Saabsan</h5>
                <p>
                    TaloWadaag waa madal loogu talagalay ardayda si ay u wadaagaan fikradaha iyo waxbarashada faa’iidada leh.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 col-12 mb-3">
                <h5 class="text-uppercase">Xiriirada Degdegga ah</h5>
                <ul class="list-unstyled">
                    <li><a href="{{route("home")}}" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="#services" class="text-white text-decoration-none">Adeegyadeena</a></li>
                    <li><a href="#testimonials" class="text-white text-decoration-none">Ra'yiga Dadka</a></li>
                    <li><a href="#contact" class="text-white text-decoration-none">Nala Soo Xiriir</a></li>
                </ul>
            </div>

            <!-- Contact Us -->
            <div class="col-md-4 col-12">
                <h5 class="text-uppercase">Nala Soo Xiriir</h5>
                <p>
                    <i class="fa fa-map-marker-alt"></i> Galka'ayo, Soomaaliya <br>
                    <i class="fa fa-envelope"></i> support@talowadaag.com <br>
                    <i class="fa fa-phone"></i> +252-0906852289
                </p>
            </div>
        </div>
        <hr class="my-3">
        <div class="text-center">
            <p class="mb-0">&copy; 2024 TaloWadaag. Dhammaan Xuquuqda Waa Leedahay.</p>
        </div>
    </div>
</footer>


  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <!-- <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div> -->

    <script src=" {{asset("assets/js/jquery-3.3.1.min.js")}}"></script>
<script src=" {{asset("assets/js/bootstrap.min.js")}} "></script>
<script src=" {{asset("assets/js/player.js")}} "></script>
<script src=" {{asset("assets/js/jquery.nice-select.min.js")}} "></script>
<script src="{{asset("assets/js/mixitup.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.slicknav.js")}}"></script>
<script src=" {{asset("assets/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("assets/js/main.js")}}"></script>
</body>
</html>
