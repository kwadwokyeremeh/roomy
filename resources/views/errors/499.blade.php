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
                                        <a href="#">10001 pages</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vk-404page-content">
                        <div class="container">
                            <h2>You are not done with your hostel registration</h2>
                            <p>
                                <br>Click here to continue <a href="{{route('hostel.registration','08')}}"> Continue with registration </a></p>
                            <p>If you did not start the registration process contact your hostel management team for more information</p>
                            <img src="{{asset('images/02_08_404page/icon.png')}}" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection


