@extends('layouts.app')

@section('content')
<section class="hero " style="margin-top: -75px;background-color:#0b0c2a;">
        <div class="container-fluid">
            <div class="hero__slider owl-carousel">
               
              
                <div class="hero__items set-bg" data-setbg="{{asset("assets/img/recent-1.jpg")}}">
                    <div class="row">
                        <div class="col-lg-6">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad" style="background-color:#0b0c2a; margin-top:-20px">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__review__item">
                                    <div class="anime__review__item__pic">
                                        <img src="{{asset("assets/img/$post->image")}}" alt="">
                                    </div>
                                    <div class="anime__review__item__text">
                                        <h6>{{ $post->username }}- <span>{{ $post->created_at->format('d M Y - H:i:s') }}</span></h6>
                                        <p>{{ $post->post }}</p>
                                        <div class="container">
                                     <div class="d-flex justify-content-between align-items-center">
                                 <i class="fa fa-comments text-primary">{{ $numberofcomments }}</i>
                                     <i class="fa fa-heart-o text-primary mx-auto">{{$numberoffollowing}}</i>
                                 <i class="fa fa-eye text-primary">{{ $Numberviews }}</i>
                             </div>
                             </div>
                                            <!-- <div class="comment" style="color: white;"> 11</div>
                                            <div class="view"  style="color: white;"><i class="fa fa-eye"></i> 9141</div> -->
                                        
                                       
                                    </div>
                                    <div class="anime__details__btn">
                                    @if (isset(Auth::user()->id))
                                  
                             
                                  @if ($validatingFollowing>0)

                                  <button type="submit" disabled class="follow-btn"><i class="fa fa-heart-o"></i> You Liked this Post</button>
                                   @else
                                    <form action="{{route("follow", $post->id)}}" method="post">
                                        <input name="image" type="hidden" value='{{$post->image}}'>
                                        <input name="username" type="hidden" value='{{$post->username}}'>
                                        <input name="post" type="hidden" value='{{$post->post}}'>
                                    @csrf

                                    <!-- <input type="hidden" name="show_image" value="{{$post->image}}">
                                    <input type="hidden" name="show_name" value="{{$post->post}}"> -->
                                    <button type="submit" class="follow-btn"><i class="fa fa-heart-o"></i> Like</button>
                                     </form>

                                     @endif
                                     @endif
                                        
                                        </div>
                                </div>
                           
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="anime__details__review">
                            <div class="section-title">
                                <h5>Reviews</h5>
                            </div>
                           
                            @foreach ($comments as $comment )
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="{{asset("assets/img/$comment->image")}}" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>{{ $comment->user_name }}- <span>{{ $comment->created_at }}</span></h6>
                                    <p>{{ $comment->comment }}</p>
                                </div>
                            </div>
                                
                            @endforeach
                           
                            
                        </div>
                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>Your Comment</h5>
                            </div>
                            <form action="{{route("insertComment", $post->id)}}" method="POST">
                                @csrf
                                <textarea name="comment" placeholder="Your Comment"></textarea>
                                <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                    <h5 class="text-success">you might like...</h5>
                            @foreach ($posts as $post )
                               
                                <div class="anime__review__item">
                                    
                              
                                    <div class="anime__review__item__pic">
                                        <img src="{{asset("assets/img/$post->image")}}" alt="">
                                    </div>
                                    <div class="anime__review__item__text">
                                       
                                        <h6>{{ $post->username }}- <span>{{ $post->created_at }}</span></h6>
                                        <p>{{ $limit_text($post->post, 150) }}</p>
                                        <a class="text-light" href="{{route("showposts", $post->id)}}" style="text-decoration:none">seemore..</a>
                                            
                                       
                                        
                                        <!-- <div>
                                        <i class="fa fa-comments text-primary">11</i>
                                        <i class="fa fa-eye text-primary float-end">200</i>
                                       </div> -->
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                </div>
            </div>
        </section>

@endsection