@extends('layouts.app')

@section('content')

  <!-- Breadcrumb Begin -->
  <div class="breadcrumb-option" style="background-color:#0b0c2a; margin-top:-25px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{route("home")}}"><i class="fa fa-home"></i> Home</a>
                        <!-- <a href="./categories.html">Categories</a>
                        <span>Romance</span> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <h1>Your Liked Post Shows</h1>
                    
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                        @if ($likedShows->count() > 0)
                            @foreach ($likedShows as $showpost )
                            <div class="anime__review__item">
                                    <div class="anime__review__item__pic">
                                        <img src="{{asset("assets/img/$showpost->post_image")}}" alt="">
                                    </div>
                                    <div class="anime__review__item__text">
                                        <h6>{{ $showpost->post_username }} - <span>1 Hour ago</span></h6>
                                        <p>{{ $limit_text($showpost->post_letter, 150) }}</p>
                                       <!-- <div>
                                        <i class="fa fa-comments text-primary">11</i>
                                        <i class="fa fa-eye text-primary float-end">200</i>
                                       </div> -->
                                            <!-- <div class="comment" style="color: white;"> 11</div>
                                            <div class="view"  style="color: white;"><i class="fa fa-eye"></i> 9141</div> -->
                                        
                                       
                                    </div>
                                    
                                </div>
                                
                            @endforeach

                                
                          
                            @else
                            <p class="alert alert-success"> You Did Not like Any Posts Just Yet</p>

                            @endif
                           

                                
                           
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

@endsection