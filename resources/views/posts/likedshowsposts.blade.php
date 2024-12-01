@extends('layouts.app')

@section('content')

  <!-- Breadcrumb Begin -->

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
                            @foreach ($likedShows as $post )
                            <div class="anime__review__item">
                                    <div class="anime__review__item__pic">
                                        <img src="{{asset("assets/img/$post->post_image")}}" alt="">
                                    </div>
                                    <div class="anime__review__item__text">
                                        <h6>{{ $post->post_username }} - <span>{{ $post->created_at->format('d M Y - H:i:s') }}</span></h6>
                                        <p>{{ $limit_text($post->post_letter, 150) }}</p>
                                        <a class="text-light" href="{{route("showposts", $post->post_id)}}" style="text-decoration:none">seemore..</a>
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