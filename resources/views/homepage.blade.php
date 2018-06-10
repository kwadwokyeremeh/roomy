@extends('layouts.master')

@section('main-content')

    <div id="main-content" class="site-main-content">
        <div id="home-main-content" class="site-home-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="vk-slide">
                        <div id="owl-slide-home" class="owl-carousel owl-theme animated">
                            <div class="item animated">
                                <div class="vk-item-slide">
                                    <div class="slider-video">
                                        <video id="video-demo" loop>
                                            <source src="../images/01_01_default/slide-video/1.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="vk-item-slide-btn">
                                        <ul>
                                            <li>
                                                <button class="vk-play" onclick="playPause()"></button>
                                                <button class="vk-pause" onclick="playPause()"></button>
                                            </li>
                                            <li>
                                                <button class="vk-mutesound" onclick="enableMute()" type="button"></button>
                                                <button class="vk-enablemute" onclick="disableMute()" type="button"></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="vk-slide-caption">
                                        <h2 class="animated fadeInUp slide-delay-2 ">Brunei hostel</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item  animated">
                                <div class="vk-item-slide">
                                    <img src="../images/01_01_default/banner.jpg" alt="" class="img-responsive">
                                    <div class="vk-slide-caption animated">
                                        <h2 class="animated fadeInUpBig slide-delay-2">SRC Hostel</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item  animated">
                                <div class="vk-item-slide">
                                    <img src="../images/01_01_default/banner2.jpg" alt="" class="img-responsive">
                                    <div class="vk-slide-caption animated">
                                        <h2 class="animated fadeInUp slide-delay-2">Evandy Hostel</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vk-check-availability">
                        <div class="container">
                            <div class="vk-check-availability-content">

                            </div>
                        </div>
                    </div>

                    <div class="vk-sparta-about">
                        <div class="container">
                            <div class="vk-sparta-head-title">
                                <h3>Welcome To</h3>
                                <h2>Roomies</h2>
                                <div class="vk-sparta-about-border"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="vk-sparta-about-text">
                                        <p>
                                            Lorem Khaled Ipsum is a major key to success. Bless up. The weather is amazing,
                                            walk with me through the pathway of more success. Take this journey with me, Lion!
                                            Let me be clear, you have to make it through the jungle to make it to paradise,
                                            that’s the key, Lion! Wraith talk. They key is to have every key, the key to open
                                            every door. Put it this way, it took me twenty five years to get these plants,
                                            twenty five years of blood sweat and tears, and I’m never giving up, I’m just
                                            getting started.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vk-sparta-image">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 vk-clear-padding">
                                        <div class="vk-sparta-image-item">
                                            <div class="vk-sparta-item-img">
                                                <a href="#">
                                                    <img src="../images/01_01_default/vk-sparta-image/img1.jpg" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="vk-iamge-item-caption">
                                                <img src="../images/01_01_default/vk-sparta-image-icon/spa2.png" alt="">
                                                <h2>Brunei Hostel</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6  vk-clear-padding">
                                        <div class="vk-sparta-image-item">
                                            <div class="vk-sparta-item-img">
                                                <a href="#">
                                                    <img src="../images/01_01_default/vk-sparta-image/img2.jpg" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="vk-iamge-item-caption">
                                                <img src="../images/01_01_default/vk-sparta-image-icon/food.png" alt="">
                                                <h2>SRC Hostel</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 vk-clear-padding">
                                        <div class="vk-sparta-image-item">
                                            <div class="vk-sparta-item-img">
                                                <a href="#">
                                                    <img src="../images/01_01_default/vk-sparta-image/img3.jpg" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="vk-iamge-item-caption">
                                                <img src="../images/01_01_default/vk-sparta-image-icon/gym.png" alt="">
                                                <h2>Evandy Hostel</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 vk-clear-padding">
                                        <div class="vk-sparta-image-item">
                                            <div class="vk-sparta-item-img">
                                                <a href="#">
                                                    <img src="../images/01_01_default/vk-sparta-image/img4.jpg" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="vk-iamge-item-caption">
                                                <img src="../images/01_01_default/vk-sparta-image-icon/event.png" alt="">
                                                <h2>By His Grace Hostel</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vk-our-room">
                        <div class="container">
                            <div class="vk-sparta-head-title">
                                <h3>Available Hostels</h3>
                                <h2>Affordable & Convenient</h2>
                                <div class="vk-sparta-about-border"></div>
                            </div>
                            <div class="vk-spartar-our-room-destop">
                                <div class="vk-sparta-our-room">
                                    <div id="vk-owl-our-room" class="vk-owl-three-dots owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Evandy Hostel</a></h2>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img1.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">By His Grace Hostel</a></h2>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img2.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">SRC Hostel</a></h2>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Evandy Hostel</a></h2>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img1.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">By His Grace Hostel</a></h2>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img2.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">SRC Hostel</a></h2>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Evandy Hostel</a></h2>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img1.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">By His Grace Hostel</a></h2>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img2.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">SRC Hostel</a></h2>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vk-spartar-our-room-mobile">
                                <div class="item">
                                    <div class="vk-sparta-item-content">
                                        <div class="vk-item-img">
                                            <a href="#"><img src="../images/01_01_default/our-room/img.jpg" alt="" class="img-responsive"></a>
                                        </div>
                                        <div class="vk-item-text">
                                            <h2><a href="#">Evandy Hostel</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="vk-sparta-item-content">
                                        <div class="vk-item-img">
                                            <a href="#"><img src="../images/01_01_default/our-room/img1.jpg" alt="" class="img-responsive"></a>
                                        </div>
                                        <div class="vk-item-text">
                                            <h2><a href="#">By His Grace Hostel</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="vk-sparta-item-content">
                                        <div class="vk-item-img">
                                            <a href="#"><img src="../images/01_01_default/our-room/img2.jpg" alt="" class="img-responsive"></a>
                                        </div>
                                        <div class="vk-item-text">
                                            <h2><a href="#">SRC Hostel</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="vk-sparta-home-blog">
                        <div class="container">
                            <div class="vk-sparta-head-title" style="margin-top: -180px;">
                                <h3>Blog</h3>
                                <h2>Latest Posts From Blog</h2>
                                <div class="vk-sparta-about-border"></div>
                            </div>
                            <div class="vk-sparta-home-blog-content-destop">
                                <div class="vk-sparta-home-blog-content">
                                    <div id="vk-owl-home-blog" class="vk-owl-three-dots owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="vk-sparta-item-blog-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Why choose Brunei Hostel</a></h2>
                                                    <div class="time">26 June,2017</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-blog-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img1.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Why choose Evandy Hostel</a></h2>
                                                    <div class="time">26 June,2017</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-blog-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img2.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Why choose SRC Hostel</a></h2>
                                                    <div class="time">26 June,2017</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-blog-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Why choose Brunei Hostel</a></h2>
                                                    <div class="time">26 June,2017</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-blog-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img1.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Why choose Evandy Hostel</a></h2>
                                                    <div class="time">26 June,2017</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-blog-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img2.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Why choose SRC Hostel</a></h2>
                                                    <div class="time">26 June,2017</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-blog-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Why choose Brunei Hostel</a></h2>
                                                    <div class="time">26 June,2017</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-blog-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img1.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Why choose Evandy Hostel</a></h2>
                                                    <div class="time">26 June,2017</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-item-blog-content">
                                                <div class="vk-item-img">
                                                    <a href="#"><img src="../images/01_01_default/our-room/img2.jpg" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="#">Why choose SRC Hostel</a></h2>
                                                    <div class="time">26 June,2017</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="vk-sparta-home-blog-content-mobile">
                                <div class="item">
                                    <div class="vk-sparta-item-blog-content">
                                        <div class="vk-item-img">
                                            <a href="#"><img src="../images/01_01_default/our-room/img.jpg" alt="" class="img-responsive"></a>
                                        </div>
                                        <div class="vk-item-text">
                                            <h2><a href="#">Why choose Sparta Plaza Hotel to travel this summer</a></h2>
                                            <div class="time">26 June,2017</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="vk-sparta-item-blog-content">
                                        <div class="vk-item-img">
                                            <a href="#"><img src="../images/01_01_default/our-room/img1.jpg" alt="" class="img-responsive"></a>
                                        </div>
                                        <div class="vk-item-text">
                                            <h2><a href="#">Why choose Sparta Plaza Hotel to travel this summer</a></h2>
                                            <div class="time">26 June,2017</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="vk-sparta-item-blog-content">
                                        <div class="vk-item-img">
                                            <a href="#"><img src="../images/01_01_default/our-room/img2.jpg" alt="" class="img-responsive"></a>
                                        </div>
                                        <div class="vk-item-text">
                                            <h2><a href="#">Why choose Sparta Plaza Hotel to travel this summer</a></h2>
                                            <div class="time">26 June,2017</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="vk-sparta-image-gallery">
                        <div class="vk-sparta-image-gallery-img">
                            <div id="lightgallery">
                                <div class="col-md-2 col-md-6 col-xs-6 vk-clear-padding" data-src="images/01_01_default/gallery/1-1.jpg">
                                    <div class="vk-gallery-item-img">
                                        <img src="../images/01_01_default/gallery/1.jpg" alt="" class="img-responsive">
                                        <div class="vk-item-caption">
                                            <div class="featured-slider-overlay"></div>
                                            <div class="vk-item-caption-text">
                                                <h2>Evandy</h2>
                                                <h4>Hostel</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2  col-md-6 col-xs-6 vk-clear-padding" data-src="images/01_01_default/gallery/1-2.jpg">
                                    <div class="vk-gallery-item-img">
                                        <img src="../images/01_01_default/gallery/2.jpg" alt="" class="img-responsive">
                                        <div class="vk-item-caption">
                                            <div class="featured-slider-overlay"></div>
                                            <div class="vk-item-caption-text">
                                                <h2>Frontline</h2>
                                                <h4>Hostel</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-md-6 col-xs-6 vk-clear-padding" data-src="images/01_01_default/gallery/1-3.jpg">
                                    <div class="vk-gallery-item-img">
                                        <img src="../images/01_01_default/gallery/3.jpg" alt="" class="img-responsive">
                                        <div class="vk-item-caption">
                                            <div class="featured-slider-overlay"></div>
                                            <div class="vk-item-caption-text">
                                                <h2>SRC</h2>
                                                <h4>Hostel</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-md-6 col-xs-6 vk-clear-padding" data-src="images/01_01_default/gallery/1-4.jpg">
                                    <div class="vk-gallery-item-img">
                                        <img src="../images/01_01_default/gallery/4.jpg" alt="" class="img-responsive">
                                        <div class="vk-item-caption">
                                            <div class="featured-slider-overlay"></div>
                                            <div class="vk-item-caption-text">
                                                <h2>Brunei</h2>
                                                <h4>Hostel</h4>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-md-6 col-xs-6 vk-clear-padding" data-src="images/01_01_default/gallery/1-5.jpg">
                                    <div class="vk-gallery-item-img">
                                        <img src="../images/01_01_default/gallery/5.jpg" alt="" class="img-responsive">
                                        <div class="vk-item-caption">
                                            <div class="featured-slider-overlay"></div>
                                            <div class="vk-item-caption-text">
                                                <h2>By His Grace</h2>
                                                <h4>Hostel</h4>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-md-6 col-xs-6 vk-clear-padding" data-src="images/01_01_default/gallery/1-6.jpg">
                                    <div class="vk-gallery-item-img">
                                        <img src="../images/01_01_default/gallery/6.jpg" alt="" class="img-responsive">
                                        <div class="vk-item-caption">
                                            <div class="featured-slider-overlay"></div>
                                            <div class="vk-item-caption-text">
                                                <h2>Hall 7</h2>
                                                <h4>Hostel</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
