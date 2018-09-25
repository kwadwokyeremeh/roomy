@extends('layouts.master')
@section('main-content')

    <div class="vk-404page">
        <section class="site-content-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="vk-gallery-grid-full-banner">

                        <div class="vk-about-banner">
                            <div class="vk-about-banner-destop">
                                <div class="vk-banner-img"></div>
                                <div class="vk-about-banner-caption">
                                    <h2>404 pages</h2>
                                    <h3>
                                        <a href="#">Page</a>
                                        <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                        <a href="#">10002 pages</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vk-404page-content">
                        <div class="container">
                            <h2>Sorry, your reservation has expired</h2>
                            <p>Click here to make a  <a href="{{route('allHostels')}}"> new reservation</a></p>

                            <img src="{{asset('images/02_08_404page/icon.png')}}" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection


