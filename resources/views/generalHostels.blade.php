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
                                                <source src="../images/01_01_default/slide-vide/720P.mp4" type="video/mp4">
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
                                            <h3 class="animated  fadeInDown slide-delay-1">Hostel Slang</h3>
                                            <h2 class="animated fadeInUp slide-delay-2 ">Hostel Name</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="item  animated">
                                    <div class="vk-item-slide">
                                        <img src="../images/01_01_default/banner.jpg" alt="" class="img-responsive">
                                        <div class="vk-slide-caption animated">
                                            <h3 class="animated rotateInDownRight slide-delay-1">Hostel Slang</h3>
                                            <h2 class="animated fadeInUpBig slide-delay-2">Hostel Name</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="item  animated">
                                    <div class="vk-item-slide">
                                        <img src="../images/01_01_default/banner2.jpg" alt="" class="img-responsive">
                                        <div class="vk-slide-caption animated">
                                            <h3 class="animated flipInX slide-delay-1">Hostel Slang</h3>
                                            <h2 class="animated fadeInUp slide-delay-2">Hostel name</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Advanced search-->

                        <div class="vk-booking-center-logo">
                            <div class="container">
                                <form action="searchResults.blade.php" class="form-horizontal  booking-hotel-all">
                                    @csrf
                                    <ul>
                                        <li>
                                            <h4>Hostel</h4>
                                            <div class="input-group">
                                                <input name="hostelName" class="form-control" type="text">
                                                <span class="input-group-addon btn"><span class="fa fa-building"></span></span>
                                            </div>
                                        </li>
                                        <li>
                                            <h4>Location</h4>
                                            <div class="input-group">
                                                <input name="location" class="form-control" type="text">
                                                <span class="input-group-addon btn"><span class="fa fa-map-pin"></span></span>
                                            </div>
                                        </li>
                                        <li>
                                            <h4>Price Filter</h4>
                                            <div class="wrap-select">
                                                <div class="slider">
                                                    <div id="slider-range-1" class="ui-slider-range">

                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <h4>Amount</h4>
                                            <div class="wrap-select" style="margin-bottom: auto">
                                                <div id="dda">
                                                    <span style="margin-right: 0; padding-right: 0">
                                                        <label class="label-filter-price" style="max-width: 60%; margin-top: 0px; height: 50px;">
                                                            <input type="text" id="amount-1" style="border:0; max-width: 60%; color:#f6931f; font-weight:bold;">
                                                        </label>
                                                   </span>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="vk-btn-check">
                                                <button type="submit" class="btn vk-btn-primary btn-block btn-check">Advanced Search</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>


                        <!--Advanced search-->

                        <!--List of hostels-->

                        <!--BENGIN CONTENT HEADER-->
                        <div class="clearfix"></div>
                        <section class="site-content-area">
                            <div class="container-fluid">
                                <div class="row">

                                    <div class="vk-room-list-content">
                                        <div class="container">
                                            <div class="vk-room-list-header">
                                                <h3>Available Hostels</h3>
                                                <h2>Choose A Hostel</h2>
                                                <div class="vk-room-list-border"></div>
                                            </div>
                                            <!--Hostel 1-->

                                            <div class="row">
                                                <div class="item">
                                                    <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                                                        <div class="vk-dark-our-room-item-img">
                                                            <img src="../images/04_02_room_grid/img-1.jpg" alt="" class="img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 vk-dark-our-room-item-right vk-clear-padding">
                                                        <div class="vk-dark-our-room-item-content">
                                                            <h3><a href="../individual_hostel">Hostel Name</a></h3>
                                                            <ul>
                                                                <li><p><i class="fa fa-diamond" aria-hidden="true"></i> Hostel slang <span> : Brunei</span></p></li>
                                                                <li><p><i class="fa fa-address-card" aria-hidden="true"></i> Location <span> : 1 Hostel Address</span></p></li>
                                                                <li>
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-xs-3"><p><i class="fa fa-arrows-alt" aria-hidden="true"></i><small>Room Type</small></p>
                                                                                <ul>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                </ul></div>
                                                                            <div class="col-xs-3"><p><i class="" aria-hidden="true"></i>&cent; Price</p>
                                                                                <ul>
                                                                                    <li><p class="text text-center"><span>&cent;1500</span></p></li>
                                                                                    <li><p class="text text-center"><span>&cent;1500</span></p></li>
                                                                                    <li><p class="text text-center"><span>&cent;1500</span></p></li>
                                                                                    <li><p class="text text-center"><span>&cent;1500</span></p></li>
                                                                                </ul></div>
                                                                            <div class="col-xs-3"><p><i class="fa fa-male" aria-hidden="true"></i> Male</p>
                                                                                <ul>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                </ul></div>
                                                                            <div class="col-xs-3"><p><i class="fa fa-female" aria-hidden="true"></i> Female</p>
                                                                                <ul>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                </ul></div>

                                                                        </div>
                                                                    </div>
                                                            </ul>
                                                            <div class="vk-dark-our-room-item-book">
                                                                <div class="vk-dark-our-room-item-book-left">
                                                                    <ul>
                                                                        <li>
                                                                            <p>Rating : </p>
                                                                        </li>
                                                                        <li>
                                                                            <p>8/ <span>10</span></p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="vk-dark-our-room-item-book-right">
                                                                    <a href="../booking"> Rent A Bed <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <!--Hostel 1-->
                                            <!--Hostel 1-->

                                            <div class="row">
                                                <div class="item">
                                                    <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                                                        <div class="vk-dark-our-room-item-img">
                                                            <img src="../images/04_02_room_grid/img-2.jpg" alt="" class="img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 vk-dark-our-room-item-right vk-clear-padding">
                                                        <div class="vk-dark-our-room-item-content">
                                                            <h3><a href="../individual_hostel">Hostel Name</a></h3>
                                                            <ul>
                                                                <li><p><i class="fa fa-diamond" aria-hidden="true"></i> Hostel slang <span> : Brunei</span></p></li>
                                                                <li><p><i class="fa fa-address-card" aria-hidden="true"></i> Location <span> : 1 Hostel Address</span></p></li>
                                                                <li>
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-xs-3"><p><i class="fa fa-arrows-alt" aria-hidden="true"></i><small>Room Type</small></p>
                                                                                <ul>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                </ul></div>
                                                                            <div class="col-xs-3"><p><i class="" aria-hidden="true"></i>&cent; Price</p>
                                                                                <ul>
                                                                                    <li><p class="text text-center"><span>&cent;1500</span></p></li>
                                                                                    <li><p class="text text-center"><span>&cent;1500</span></p></li>
                                                                                    <li><p class="text text-center"><span>&cent;1500</span></p></li>
                                                                                    <li><p class="text text-center"><span>&cent;1500</span></p></li>
                                                                                </ul></div>
                                                                            <div class="col-xs-3"><p><i class="fa fa-male" aria-hidden="true"></i> Male</p>
                                                                                <ul>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                </ul></div>
                                                                            <div class="col-xs-3"><p><i class="fa fa-female" aria-hidden="true"></i> Female</p>
                                                                                <ul>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                </ul></div>

                                                                        </div>
                                                                    </div>
                                                            </ul>
                                                            <div class="vk-dark-our-room-item-book">
                                                                <div class="vk-dark-our-room-item-book-left">
                                                                    <ul>
                                                                        <li>
                                                                            <p>Rating : </p>
                                                                        </li>
                                                                        <li>
                                                                            <p>8/ <span>10</span></p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="vk-dark-our-room-item-book-right">
                                                                    <a href="../booking"> Rent A Bed <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <!--Hostel 1-->
                                            <!--Hostel 1-->

                                            <div class="row">
                                                <div class="item">
                                                    <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                                                        <div class="vk-dark-our-room-item-img">
                                                            <img src="../images/04_02_room_grid/img-3.jpg" alt="" class="img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 vk-dark-our-room-item-right vk-clear-padding">
                                                        <div class="vk-dark-our-room-item-content">
                                                            <h3><a href="../individual_hostel">Hostel Name</a></h3>
                                                            <ul>
                                                                <li><p><i class="fa fa-diamond" aria-hidden="true"></i> Hostel slang <span> : Brunei</span></p></li>
                                                                <li><p><i class="fa fa-address-card" aria-hidden="true"></i> Location <span> : 1 Hostel Address</span></p></li>
                                                                <li>
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-xs-3"><p><i class="fa fa-arrows-alt" aria-hidden="true"></i><small>Room Type</small></p>
                                                                                <ul>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                </ul></div>
                                                                            <div class="col-xs-3"><p><i class="" aria-hidden="true"></i>&cent; Price</p>
                                                                                <ul>
                                                                                    <li><p class="text text-center"><span>&cent;1500</span></p></li>
                                                                                    <li><p class="text text-center"><span>&cent;1500</span></p></li>
                                                                                    <li><p class="text text-center"><span>&cent;1500</span></p></li>
                                                                                    <li><p class="text text-center"><span>&cent;1500</span></p></li>
                                                                                </ul></div>
                                                                            <div class="col-xs-3"><p><i class="fa fa-male" aria-hidden="true"></i> Male</p>
                                                                                <ul>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                </ul></div>
                                                                            <div class="col-xs-3"><p><i class="fa fa-female" aria-hidden="true"></i> Female</p>
                                                                                <ul>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                    <li><p class="text text-center"><span>1</span></p></li>
                                                                                </ul></div>

                                                                        </div>
                                                                    </div>
                                                            </ul>
                                                            <div class="vk-dark-our-room-item-book">
                                                                <div class="vk-dark-our-room-item-book-left">
                                                                    <ul>
                                                                        <li>
                                                                            <p>Rating : </p>
                                                                        </li>
                                                                        <li>
                                                                            <p>8/ <span>10</span></p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="vk-dark-our-room-item-book-right">
                                                                    <a href="../booking"> Rent A Bed <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <!--Hostel 1-->


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--END CONTENT ABOUT-->
                        <!--List of hostels-->
                    </div>
                    <!--Pagination-->
                    <div class="vk-select-room-pagination">
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> PREV</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <!--Pagination-->
                    <div class="vk-divider vk-divider-dashed"><p class="vk-divider-2px-double"></p></div>
                </div>
            </div>
        </div>

        @endsection
