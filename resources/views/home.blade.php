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
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad " style="background-color:#0b0c2a">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>posts Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-lg-8 col-md-8">
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
                    
                 
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
        </div>
    </div>
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>For You</h5>
        </div>
        <div class="anime__review__item">
            <div class="anime__review__item__pic">
                <img src="img/anime/review-1.jpg" alt="">
            </div>
            <div class="anime__review__item__text">
                <h6>Chris Curry - <span>1 Hour ago</span></h6>
                <a class="text-dark">whachikan Just noticed that someone categorized this as belonging to the genre
                "demons" LOL</a>
            </div>
        </div>
       
    </div>
</div>
</div>
</div>
</div>
</section>

@endsection
