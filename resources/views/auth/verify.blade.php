@extends('layouts.sessions')

@section('main-content')


    <div id="main-content" class="site-main-content">
        <div id="home-main-content" class="site-home-main-content">

            <section class="site-content-area">
                <div class="vk-gallery-grid-full-banner">
                    <div class="vk-about-banner">
                        <div class="vk-about-banner-destop">
                            <div class="vk-banner-img"></div>
                            <div class="vk-about-banner-caption">
                                <h2>Verify Your Email Address</h2>
                                <h3>
                                    <a href="#">Verify Your Email Address</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="vk-shop-checkout-body">
                    <div class="container">
                        <main id="main" class="clearfix right_sidebar">
                            <div class="tg-container">
                                <div id="primary">


                                    <div class="entry-thumbnail">

                                        <div class="entry-content-text-wrapper clearfix">
                                            <div class="entry-content-wrapper">
                                                <div class="entry-content">
                                                    <div class="woocommerce">
                                                        <div class="woocommerce-info">

                                                        </div>
                                                        <div class="vk-checkout-login">
                                                            <div class="row">


                                                                <div class="woocomerce-form woocommerce-form-login login">

                                                                    <div class="col-md-12">
                                                                        @if(session('resent'))
                                                                            <div class="vk-notification-boxes">
                                                                                <div class="vk-notification-boxes-body">
                                                                                    <ul class="vk-alert vk-alert-success ">

                                                                                        <li><span><i class="fa fa-check" aria-hidden="true"></i></span> A fresh verification link has been sent to your email address. {{--<a href="#">Click here</a>--}}</li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                      <p>
                                                                          Before proceeding, please check your email for a verification link.
                                                                          If you did not receive the email, <a href="{{ route('verification.resend') }}">click here to request another</a>.
                                                                      </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>


                                                    </div>
                                                </div><!-- .entry-content -->
                                            </div>
                                        </div>
                                    </div>


                                </div> <!-- Primary end -->
                            </div>
                        </main>
                    </div>
                </div>
            </section>


        </div>
    </div>

@endsection
