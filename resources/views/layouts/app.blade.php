<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
    <header class="header" style="padding-bottom:50px">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="">
                            <img src="" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            
                        <div class="d-flex justify-content-end">

    <ul class="nav">
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}" style="text-decoration:none">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}" style="text-decoration:none">Login</a>
        </li>
            
        @endguest

        @auth
                                <li class="active"><a href="{{route("home")}}">Homepage</a></li>
                                    
                                @endauth

    </ul>
</div>


                            
                        </nav>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="header__right">

                    @guest
                <ul>
                          

                            
<!-- 
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->

                           
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle mt-0w" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                               

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-primary" href="{{route("likedshowsposts")}}">
                                      
                                        Your liked post shows
                                    </a>
                                     <a class="dropdown-item text-primary" href="{{route("writeposts")}}">
                                      
                                        WritePosts
                                    </a>
                                    <a class="dropdown-item text-primary" href="{{ route('logout') }}"
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
              
                        <!-- <a href="#" class="search-switch"><span class="icon_search"></span></a> -->
                        <!-- <a href="./login.html"><span class="icon_profile"></span></a> -->
                    </div>
                </div>
                <!-- <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="./login.html"><span class="icon_profile"></span></a>
                    </div>
                </div> -->
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

       
    </div>

    <div>
    <main class="py-4" style="background-color:white">
            @yield('content')
        </main>
    </div>


    <footer class="footer" style="">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="./index.html">Homepage</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

              </div>
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
