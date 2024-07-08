@extends('layouts.app')

@section('content')
<section class="hero"  style="margin-top: -75px;background-color:#0b0c2a;">
        <div class="container-fluid">
            <div class="hero__slider owl-carousel">
               
              
                <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad" style="background-color:#0b0c2a">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4> Write posts Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-lg-8 col-md-8">
                                
                                <form action="{{route("create")}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <textarea name="post" class="form-control" id="" cols="20" rows="20"></textarea>
                                        <!-- <input type="hidden" name="image" value="{{Auth()->user()->image}}"> -->
                                        <button class="btn btn-primary mt-2">write</button>
                                    </div>
                                </form>
                                    
                                
                              
                              
                                   
                               

                               
                               
                                
                            </div>
                        </div>
                    </div>
                    
                 
                </div>
               
</div>
</div>
</div>
</section>

@endsection