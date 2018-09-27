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
                                <h2>Reset Password</h2>
                                <h3>
                                    <a href="#">Enter your email to receive a reset link</a>
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
                                                            <i class="fa fa-info-circle" aria-hidden="true"></i> Password Reset Form

                                                        </div>
                                                        <div class="vk-checkout-login">
                                                            <div class="row">
                                                                @if (session('status'))
                                                                    <div class="row  vk-notification-boxes-body" style="padding-top: 1px; padding-bottom: 1px">
                                                                        <div class="list-item" style="padding-bottom: 1px">

                                                                        <div class="vk-alert vk-alert-success" style="padding-bottom: 3px">
                                                                        <span><i class="fa fa-check-circle" aria-hidden="true"></i></span>{{session('status')}}
                                                                    </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                <form class="woocomerce-form woocommerce-form-login login" method="POST" action="{{ route('password.email') }}">
                                                                    @csrf
                                                                    <div class="col-md-12">
                                                                        <p>Please enter your email in the box below.
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <p class="form-row form-row-first">
                                                                            <label for="email" class="">Email Address <abbr class="required" title="required">*</abbr></label>

                                                                            <input id="email" type="email" class=" input-text {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Please enter your email" required>

                                                                            @if ($errors->has('email'))
                                                                                <span class="invalid-feedback">
                                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                                </span>
                                                                            @endif                                                                        </p>
                                                                    </div>

                                                                    <div class="clear"></div>


                                                                    <div class="col-md-12">
                                                                        <div class="vk-checkout-login">
                                                                            <div class="row">
                                                                                <div class="col-md-9">
                                                                                    <p class="form-row">
                                                                                        <input type="submit" class="button" name="submit" value="Send Password Reset Link">

                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <p class="lost_password">
                                                                                        <a href="{{route('login')}}"><i class="fa fa-question-circle" aria-hidden="true"></i>Remembered password, sign in</a>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="clear"></div>
                                                                </form>
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
