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
<div class="breadcrumb-option" style="background-color:#0b0c2a">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.html">Categories</a>
                        <span>Romance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad" style="background-color:#0b0c2a">
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
                                        <h6>{{ $post->username }}- <span>{{ $post->created_at }}</span></h6>
                                        <p>{{ $post->post }}</p>
                                       <div>
                                        <i class="fa fa-comments text-primary">11</i>
                                        <i class="fa fa-eye text-primary float-end">200</i>
                                       </div>
                                            <!-- <div class="comment" style="color: white;"> 11</div>
                                            <div class="view"  style="color: white;"><i class="fa fa-eye"></i> 9141</div> -->
                                        
                                       
                                    </div>
                                    <div class="anime__details__btn">
                                        <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i>like this post</a>
                                        
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
                           
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="img/anime/review-5.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                    <p>Finally it came out ages ago</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>Your Comment</h5>
                            </div>
                            <form action="#">
                                <textarea placeholder="Your Comment"></textarea>
                                <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="anime__details__sidebar">
                            <div class="section-title">
                                <h5>you might like...</h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-1.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Boruto: Naruto next generations</a></h5>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection