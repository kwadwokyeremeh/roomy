@extends('individualHostel.master')

    @section('main-content')

        <div id="main-content" class="site-main-content">
            <div id="home-main-content" class="site-home-main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="vk-slide">
                            <div id="owl-slide-home" class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="vk-item-slide">
                                        @foreach($hostel->hostelViews as $hostelView)
                                            <img src="{{asset('storage/'.$hostelView->front)}}" alt="" class="img-responsive">
                                        @endforeach
                                            <div class="vk-slide-caption">
                                            @if($hostel->alias)
                                            <h3 class="animated fadeInDown slide-delay-1">{{$hostel->alias}}</h3>
                                            @endif
                                            <h2 class="animated fadeInUp slide-delay-2">{{$hostel->name}}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="vk-item-slide">
                                        @foreach($hostel->hostelViews as $hostelView)
                                            <img src="{{asset('storage/'.$hostelView->right)}}" alt="" class="img-responsive">
                                        @endforeach
                                            <div class="vk-slide-caption">
                                            @if($hostel->alias)
                                            <h3 class="animated fadeInDown slide-delay-1">{{$hostel->alias}}</h3>
                                            @endif
                                            <h2 class="animated fadeInUp slide-delay-2">{{$hostel->name}}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="vk-item-slide">
                                        @foreach($hostel->hostelViews as $hostelView)
                                            <img src="{{asset('storage/'.$hostelView->left)}}" alt="" class="img-responsive">
                                        @endforeach
                                        <div class="vk-slide-caption">
                                            @if($hostel->alias)
                                            <h3 class="animated fadeInDown slide-delay-1">{{$hostel->alias}}</h3>
                                            @endif
                                            <h2 class="animated fadeInUp slide-delay-2">{{$hostel->name}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="vk-sparta-transparents-welcometo" id="overview">
                            <div class="col-md-12">
                                <div class="vk-transparents-welcometo-info">
                                    <div class="vk-dark-about-right-header">
                                        <h3>Welcome To</h3>
                                        <h2>{{$hostel->name}}</h2>
                                        <div class="clearfix"></div>
                                        <div class="vk-dark-about-border"></div>
                                    </div>
                                    <div class="vk-dark-about-right-content">
                                        <p>
                                            Lorem Khaled Ipsum is a major key to success. Bless up. The weather is
                                            amazing, walk with me through the pathway of more success. Take this
                                            journey with me, Lion! Let me be clear, you have to make it through the
                                            jungle to make it to paradise, that’s the key, Lion! Wraith talk. They key is
                                            to have every key, the key to open every door. Put it this way, it took me twenty
                                            five years to get these plants, twenty five years of blood sweat and tears,
                                            and I’m never giving up, I’m just getting started.
                                        </p>
                                    </div>
                                    <div class="vk-dark-about-right-author">
                                        <p>Victor Henderson - <span>Manager</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <!--Room Counter-->
                        <div class="vk-about-count-number">
                            <div class="vk-paralax-bg parallax-window"  id="slider">
                                <div class="vk-sparta-image-border">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="vk-sparta-count-item">
                                                    <div class="vk-sparta-count-item-img">
                                                        <img src="../images/01_09_header-full-width/count-number/icon-3.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="vk-sparta-count-item-number">
                                                        <span class="counter">{{--{{count($hostel->rooms)}}--}}</span>
                                                    </div>
                                                    <h3>Rooms Available</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="vk-sparta-count-item">
                                                    <div class="vk-sparta-count-item-img">
                                                        <i class="fa fa-5x fa-bed" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="vk-sparta-count-item-number">
                                                        <span class="counter">{{--{{array_sum($hostel->)}}--}}</span>
                                                    </div>
                                                    <h3>Beds Available</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="vk-sparta-count-item">
                                                    <div class="vk-sparta-count-item-img">
                                                        <i class="fa fa-5x fa-male" aria-hidden="true"></i>
                                                    </div>

                                                    <div class="vk-sparta-count-item-number">
                                                        <span class="counter">187</span>
                                                    </div>
                                                    <h3>Male Beds Available</h3>

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="vk-sparta-count-item">
                                                    <div class="vk-sparta-count-item-img">
                                                        <i class="fa fa-5x fa-female" aria-hidden="true"></i>
                                                    </div>

                                                    <div class="vk-sparta-count-item-number">
                                                        <span class="counter">132</span>
                                                    </div>
                                                    <h3>Female Beds Available</h3>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.Room Counter-->



                        <div class="vk-rooms-grid-content" id="room">
                            <div class="container">
                                <div class="vk-rooms-grid-header">
                                    <h3>Our Rooms</h3>
                                    <h2>Choose Your Room</h2>
                                    <div class="vk-rooms-grid-border"></div>
                                </div>

                                <div class="row">
                                    @foreach($hostel->roomDescription as $roomType)
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    {{--@foreach($hostel->roomTypeMedia as $item)
                                                        <a href="#"><img src="{{asset('storage/'.$item->image)}}" alt="" class="img-responsive"></a>
                                                    @endforeach--}}
                                                    <a href="#"><img src="{{asset('storage/'.$roomType->roomTypeMedia->first()->image)}}" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="{{url($hostel->slug.'/'.$roomType->room_token)}}">{{$roomType->room_type}}</a></h2>
                                                    <ul>
                                                        <li>
                                                            <span>Price : </span>
                                                        </li>
                                                        <li>
                                                            <p>&cent;{{$roomType->price}}/ <span>academic year</span></p>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>Room Facilities : </span>
                                                        </li>
                                                        <li>
                                                            <ul>
                                                                <li><i class="fa fa-2x fa-television"></i></li>
                                                                <li><i class="fa fa-2x fa-recycle"></i></li>
                                                                <li><i class="fa fa-2x fa-wifi"></i></li>
                                                            </ul>
                                                        </li>
                                                        <li class="vk-item-text" >
                                                            <p><span><a href="{{url($hostel->slug.'/'.$roomType->room_token)}}">Rent a bed</a></span></p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{--<div class="col-md-4 col-sm-6">
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/04_02_room_grid/img-1.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Two in a room</a></h2>
                                                    <ul>
                                                        <li>
                                                            <p>Price : </p>
                                                        </li>
                                                        <li>
                                                            <p>&cent;2400/ <span>academic year</span></p>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <p>Room Facilities : </p>
                                                        </li>
                                                        <li>
                                                            <ul>
                                                                <li><i class="fa fa-2x fa-television"></i></li>
                                                                <li><i class="fa fa-2x fa-wifi"></i></li>
                                                                <li><i class="fa fa-2x fa-recycle"></i></li>
                                                            </ul>
                                                        </li>
                                                        <li class="vk-item-text" >
                                                            <p><span><a href="#">Rent a bed</a></span></p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/04_02_room_grid/img-2.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Three in A Room</a></h2>
                                                    <ul>
                                                        <li>
                                                            <p>Price : </p>
                                                        </li>
                                                        <li>
                                                            <p>&cent;1600/ <span>academic year</span></p>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <p>Room Facilities : </p>
                                                        </li>
                                                        <li>
                                                            <ul>
                                                                <li><i class="fa fa-2x fa-television"></i></li>
                                                                <li><i class="fa fa-2x fa-wifi"></i></li>
                                                                <li><i class="fa fa-2x fa-recycle"></i></li>
                                                            </ul>
                                                        </li>
                                                        <li class="vk-item-text" >
                                                            <p><span><a href="#">Rent a bed</a></span></p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/04_02_room_grid/img-3.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Four in A Room</a></h2>
                                                    <ul>
                                                        <li>
                                                            <p>Price : </p>
                                                        </li>
                                                        <li>
                                                            <p>&cent;1200/ <span>academic year</span></p>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <p>Room Facilities : </p>
                                                        </li>
                                                        <li>
                                                            <ul>
                                                                <li><i class="fa fa-2x fa-television"></i></li>
                                                                <li><i class="fa fa-2x fa-wifi"></i></li>
                                                                <li><i class="fa fa-2x fa-recycle"></i></li>
                                                            </ul>
                                                        </li>
                                                        <li class="vk-item-text" >
                                                            <p><span><a href="#">Rent a bed</a></span></p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/04_02_room_grid/img1.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Two in One</a></h2>

                                                    <ul>
                                                        <li>
                                                            <p>Price : </p>
                                                        </li>
                                                        <li>
                                                            <p>&cent;2000/<span>academic year</span></p>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <p>Room Facilities : </p>
                                                        </li>
                                                        <li>
                                                            <ul>
                                                                <li><i class="fa fa-2x fa-television"></i></li>
                                                                <li><i class="fa fa-2x fa-wifi"></i></li>
                                                                <li><i class="fa fa-2x fa-recycle"></i></li>
                                                            </ul>
                                                        </li>
                                                        <li class="vk-item-text" >
                                                            <p><span><a href="#">Rent a bed</a></span></p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/04_02_room_grid/img2.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Three in One</a></h2>
                                                    <ul>
                                                        <li>
                                                            <p>Price : </p>
                                                        </li>
                                                        <li>
                                                            <p>&cent;1400/ <span>academic year</span></p>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <p>Room Facilities : </p>
                                                        </li>
                                                        <li>
                                                            <ul>
                                                                <li><i class="fa fa-2x fa-television"></i></li>
                                                                <li><i class="fa fa-2x fa-wifi"></i></li>
                                                                <li><i class="fa fa-2x fa-recycle"></i></li>
                                                            </ul>
                                                        </li>
                                                        <li class="vk-item-text" >
                                                            <p><span><a href="#">Rent a bed</a></span></p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!--Amenities and Facilities-->
                        <div class="vk-rooms-grid-content" id="amenities">
                            <div class="container-fluid">
                                <div class="row vk-rooms-grid-header">
                                    <h3></h3>
                                    <h2>The Amenities we provide</h2>
                                    <div class="vk-rooms-grid-border"></div>
                                </div>
                                <div class="vk-sparta-image">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-3 vk-clear-padding">
                                                <div class="vk-sparta-image-item">
                                                    <div class="vk-sparta-item-img">
                                                        <a href="#">
                                                            <img src="../images/01_01_default/vk-sparta-image/img1.jpg" alt="" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="vk-iamge-item-caption">
                                                        <img src="../images/01_01_default/vk-sparta-image-icon/spa2.png" alt="">
                                                        <h2>Spa</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3  vk-clear-padding">
                                                <div class="vk-sparta-image-item">
                                                    <div class="vk-sparta-item-img">
                                                        <a href="#">
                                                            <img src="../images/01_01_default/vk-sparta-image/img2.jpg" alt="" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="vk-iamge-item-caption">
                                                        <img src="../images/01_01_default/vk-sparta-image-icon/food.png" alt="">
                                                        <h2>Restaurant</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 vk-clear-padding">
                                                <div class="vk-sparta-image-item">
                                                    <div class="vk-sparta-item-img">
                                                        <a href="#">
                                                            <img src="../images/01_01_default/vk-sparta-image/img3.jpg" alt="" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="vk-iamge-item-caption">
                                                        <img src="../images/01_01_default/vk-sparta-image-icon/gym.png" alt="">
                                                        <h2>Gym</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 vk-clear-padding">
                                                <div class="vk-sparta-image-item">
                                                    <div class="vk-sparta-item-img">
                                                        <a href="#">
                                                            <img src="../images/01_01_default/vk-sparta-image/img4.jpg" alt="" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="vk-iamge-item-caption">
                                                        <img src="../images/01_01_default/vk-sparta-image-icon/event.png" alt="">
                                                        <h2>Event</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.Amenities and Facilities-->
                        <!--BENGIN CONTENT HEADER-->
                        <section class="site-content-area">
                            <div class="container-fluid">
                                <div class="row">


                                    <div class="vk-iso-nav">
                                        <ul>
                                            <li class="active" data-filter="*">All</li>
                                            <li data-filter=".a">General</li>
                                            <li data-filter=".b">Food and Drinks</li>
                                            <li data-filter=".c">Entertainment</li>
                                            <li data-filter=".d">Gym</li>
                                            <li data-filter=".e">Corridor</li>
                                        </ul>
                                        <div class="vk-iso-nav-line"></div>
                                    </div>
                                    <div class="vk-main-iso">
                                        <div id="lightgallery">
                                            <div class="col-md-4 vk-clear-padding item a c d col-sm-4" data-src="images/02_03_gallery_grid_full_width/1.jpg">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/02_03_gallery_grid_full_width/1.jpg" alt="" class="img-responsive"></a>
                                                    <div class="vk-item-caption">
                                                        <div class="featured-slider-overlay"></div>
                                                        <div class="vk-item-caption-text">
                                                            <h2>Master Chef</h2>
                                                            <h4>Restaurant</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 vk-clear-padding item b d e  col-sm-4" data-src="images/02_03_gallery_grid_full_width/2.jpg">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/02_03_gallery_grid_full_width/2.jpg" alt="" class="img-responsive"></a>
                                                    <div class="vk-item-caption">
                                                        <div class="featured-slider-overlay"></div>
                                                        <div class="vk-item-caption-text">
                                                            <h2>Master Chef</h2>
                                                            <h4>Restaurant</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 vk-clear-padding item a b e  col-sm-4" data-src="images/02_03_gallery_grid_full_width/3.jpg">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/02_03_gallery_grid_full_width/3.jpg" alt="" class="img-responsive"></a>
                                                    <div class="vk-item-caption">
                                                        <div class="featured-slider-overlay"></div>
                                                        <div class="vk-item-caption-text">
                                                            <h2>Master Chef</h2>
                                                            <h4>Restaurant</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 vk-clear-padding item c e a b  col-sm-4" data-src="images/02_03_gallery_grid_full_width/4.jpg">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/02_03_gallery_grid_full_width/4.jpg" alt="" class="img-responsive"></a>
                                                    <div class="vk-item-caption">
                                                        <div class="featured-slider-overlay"></div>
                                                        <div class="vk-item-caption-text">
                                                            <h2>Master Chef</h2>
                                                            <h4>Restaurant</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 vk-clear-padding item c b a  col-sm-4" data-src="images/02_03_gallery_grid_full_width/5.jpg">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/02_03_gallery_grid_full_width/5.jpg" alt="" class="img-responsive"></a>
                                                    <div class="vk-item-caption">
                                                        <div class="featured-slider-overlay"></div>
                                                        <div class="vk-item-caption-text">
                                                            <h2>Master Chef</h2>
                                                            <h4>Restaurant</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 vk-clear-padding item c e b  col-sm-4" data-src="images/02_03_gallery_grid_full_width/6.jpg">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/02_03_gallery_grid_full_width/6.jpg" alt="" class="img-responsive"></a>
                                                    <div class="vk-item-caption">
                                                        <div class="featured-slider-overlay"></div>
                                                        <div class="vk-item-caption-text">
                                                            <h2>Master Chef</h2>
                                                            <h4>Restaurant</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 vk-clear-padding item e d a  col-sm-4" data-src="images/02_03_gallery_grid_full_width/7.jpg">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/02_03_gallery_grid_full_width/7.jpg" alt="" class="img-responsive"></a>
                                                    <div class="vk-item-caption">
                                                        <div class="featured-slider-overlay"></div>
                                                        <div class="vk-item-caption-text">
                                                            <h2>Master Chef</h2>
                                                            <h4>Restaurant</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 vk-clear-padding item a c e  col-sm-4" data-src="images/02_03_gallery_grid_full_width/8.jpg">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/02_03_gallery_grid_full_width/8.jpg" alt="" class="img-responsive"></a>
                                                    <div class="vk-item-caption">
                                                        <div class="featured-slider-overlay"></div>
                                                        <div class="vk-item-caption-text">
                                                            <h2>Master Chef</h2>
                                                            <h4>Restaurant</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 vk-clear-padding item c b  col-sm-4" data-src="images/02_03_gallery_grid_full_width/9.jpg">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/02_03_gallery_grid_full_width/9.jpg" alt="" class="img-responsive"></a>
                                                    <div class="vk-item-caption">
                                                        <div class="featured-slider-overlay"></div>
                                                        <div class="vk-item-caption-text">
                                                            <h2>Master Chef</h2>
                                                            <h4>Restaurant</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    {{--<div class="vk-btn-more">
                                        <button type="button" class="btn-more">LOAD MORE <i class="fa fa-long-arrow-down" aria-hidden="true"></i></button>
                                    </div>--}}
                                </div>
                            </div>
                        </section>
                        {{--<!--ENd of additional gallery-->
                        <!--BENGIN CONTENT HEADER-->--}}
                        <section class="site-content-area" id="location">
                            <div class="container-fluid">
                                <div class="row">


                                    <div class="vk-contact-us">
                                        <div class="col-md-7 vk-clear-padding">
                                            <div class="vk-contact-us-map">
                                                <div id="map"></div>
                                                <iframe class="map" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCffNTwIH4gq4MXS3Yr003uFpcuENRnkUo&q={{$hostel->name}},{{$hostel->street_address}}+{{$hostel->city}}+{{$hostel->country}}&center={{$hostel->latitude}},{{$hostel->longitude}}" height="585" style="border:0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-5 vk-clear-padding">
                                            <div class="vk-contact-us-info">
                                                <div class="vk-contact-us-info-header">
                                                    <h3>Get In Touch</h3>
                                                    <h2>Contact Us</h2>
                                                    <div class="clearfix"></div>
                                                    <div class="vk-contact-border"></div>
                                                </div>
                                                <div class="vk-contact-us-info-text">
                                                    <ul>
                                                        <li>
                                                            <div class="vk-contact-us-info-text-icon">
                                                                <span class="ti-location-pin"></span>
                                                            </div>
                                                            <div class="vk-contact-us-info-text-right">
                                                                <h4>LOCATION</h4>
                                                                <p class="text-capitalize">{{$hostel->street_address}}, {{$hostel->city}}, {{$hostel->country}}</p>
                                                            </div>
                                                        </li>
                                                        @if($hostel->hostel_email)
                                                        <li>
                                                            <div class="vk-contact-us-info-text-icon">
                                                                <span class="ti-email"></span>
                                                            </div>
                                                            <div class="vk-contact-us-info-text-right">
                                                                <h4>Email</h4>
                                                                <p>{{$hostel->hostel_email}}</p>
                                                            </div>
                                                        </li>
                                                        @endif
                                                        @if($hostel->hostel_phone)
                                                        <li>
                                                            <div class="vk-contact-us-info-text-icon">
                                                                <span class="ti-mobile"></span>
                                                            </div>
                                                            <div class="vk-contact-us-info-text-right">
                                                                <h4>TEL</h4>
                                                                <p>{{$hostel->hostel_phone}}</p>
                                                            </div>
                                                        </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    @include('individualHostel._partials.contactUs')
                                </div>
                            </div>
                        </section>
                        <!--END CONTENT ABOUT-->
                    </div>
                </div>
            </div>
        </div>

    @endsection

@section('custom-script')
    {{--<script>
        // Initialize and add the map
        function initMap() {
            // The location of hostel
            var hostel = {lat: {{$hostel->latitude}}, lng: {{$hostel->longitude}} };
            // The map, centered at hostel
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 4, center: hostel});
            // The marker, positioned at hostel
            var marker = new google.maps.Marker({position: hostel, map: map});
        }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCffNTwIH4gq4MXS3Yr003uFpcuENRnkUo&callback=initMap">
    </script>--}}
@endsection
