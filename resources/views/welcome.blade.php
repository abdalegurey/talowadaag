@extends('layouts.app')

@section('content')


<!--  @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

    <section class="bg-primary mt-0 absolute py-5 d-inline" style="height:100vh">
      <div class="container-fluid"style="margin-top:30vh; ">
        <div class="row py-3">
            <!-- <div class="col-md-5 mt-3">
               
              <img src="./images/pexels-anna-shvets-3786215.jpg" alt=""> 
            </div> -->
            <!-- <div class="text-center"> -->
            <div class="col-md-6 col-sm-12 text-center" style="">
                <h1 class="display-5 text-primary" style="font-family:fantasy;">Welcome TaloWadaag Website</h1>
                <p class="display-6 text-dark" style="font-weight:bold;">Waa Website Aan Ugu talagaly In Ay Ardaydu Talowadaag Ku sameeyaan</p>
                <p class="display-6" style="font-weight:bold;">Developer By Gurey Technology.</p>
            </div> 

            <div class="col-md-6 col-sm-12 sawir">
              <img src="{{asset("assets/img/talowada.jpg")}}" alt="" class="sawir" style="height:600px;width:60%; margin-bottom:150px;">
            </div>

            <!-- </div> -->
         
        </div>
      </div>
    </section>

    <!-- .................................... ......................................................................-->
   
  
       


@endsection