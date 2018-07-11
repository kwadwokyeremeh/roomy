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
                                                        <span class="counter">342</span>
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
                                                        <span class="counter">433</span>
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
                                                    @foreach($roomType->roomTypeMedia as $roomTypeMedia)
                                                    <a href="#"><img src="{{asset('storage/'.$roomTypeMedia}}" alt="" class="img-responsive"></a>
                                                    @endforeach
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">{{$roomType->room_type}}</a></h2>
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
                                                            <p><span><a href="#">Rent a bed</a></span></p>
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
                                                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.3558605259554!2d-0.1305261839151272!3d50.824572079528714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875859878db2cc7%3A0xff129250121f260d!2s45+Queen&#39;s+Park+Rd%2C+Brighton+BN2+0GJ%2C+UK!5e0!3m2!1sen!2s!4v1505207016897" height="585" style="border:0" allowfullscreen></iframe>
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
