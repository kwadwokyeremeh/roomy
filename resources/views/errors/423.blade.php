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
                                    <h2>Reservations for this hostel is closed</h2>
                                    <h3>
                                        <a href="#">Page</a>
                                        <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                        <a href="#">423 pages</a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="vk-404page-content">
                        <div class="container">
                            <p>Notify me when {{request()->hostelName}} opens reservations

                            <br>Go back to  <a href="{{route('hostel',request()->hostelName)}}"> {{request()->hostelName}} </a></p>

                        </div>
                        <div class="vk-coming-soon-email">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <input type="Email" class="form-control" placeholder="Email address">
                                            <span class="input-group-addon success"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2></h2>

                </div>
            </div>
        </section>
    </div>

@endsection


