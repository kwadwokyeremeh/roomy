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
                                <h2>Sign In</h2>
                                <h3>
                                    <a href="#">Start your session by signing in</a>
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
                                                            <i class="fa fa-info-circle" aria-hidden="true"></i> Returning customer
                                                            <div class="pull-right">
                                                                I am a Hostel Manager &nbsp;
                                                                <label class="switch switch-icon switch-success-outline-alt">
                                                                    <input type="checkbox" class="switch-input" checked="">
                                                                    <span class="switch-label" data-on="" data-off=""></span>
                                                                    <span class="switch-handle"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        {{--@if($errors->any())
                                                            <div class="vk-notification-boxes">
                                                                <div class="vk-notification-boxes-body">
                                                                    <ul class="vk-alert vk-alert-warning ">
                                                                        @foreach($errors->all() as $error)
                                                                            <li><span><i class="fa fa-times-circle" aria-hidden="true"></i></span> {{$error}} --}}{{--<a href="#">Click here</a>--}}{{--</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        @endif--}}
                                                        <div class="vk-checkout-login">
                                                            <div class="row">
                                                                <form class="woocomerce-form woocommerce-form-login login" method="POST" action="{{ route('hosteller.login') }}">
                                                                    @csrf
                                                                    <div class="col-md-12">
                                                                        <p>If you've done business with us before, please enter your details in the boxes below.
                                                                            If you are a new customer, <a href="{{ route('hosteller.register') }}">please click here to sign up</a>.
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <p class="form-row form-row-first">
                                                                            <label for="username" class="">Username or Email <abbr class="required" title="required">*</abbr></label>

                                                                            <input id="email" type="email" class="input-text {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Please enter your Username or email" required autofocus>

                                                                            @if ($errors->has('email'))
                                                                                <span class="invalid-feedback">
                                                                                    <strong style="color: #ff0000">{{ $errors->first('email') }}</strong>
                                                                                </span>
                                                                            @endif

                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <p class="form-row form-row-last">
                                                                            <label for="password" class="">Password <abbr class="required" title="required">*</abbr></label>
                                                                            <input id="password" type="password" class="input-text {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Please enter your password" required>

                                                                            @if ($errors->has('password'))
                                                                                <span class="invalid-feedback">
                                                                                    <strong style="color: #ff0000">{{ $errors->first('password') }}</strong>
                                                                                </span>
                                                                            @endif

                                                                        </p>

                                                                    </div>
                                                                    <div class="clear"></div>

                                                                    {{--@captcha--}}
                                                                    <div class="col-md-12">
                                                                        <div class="vk-checkout-login">
                                                                            <div class="row">
                                                                                <div class="col-md-9">
                                                                                    <p class="form-row">
                                                                                        <a href="#"><input type="submit" class="button" name="login" value="LOGIN"></a>
                                                                                        <span>

                                                                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}

                                                                                    </span>

                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <p class="lost_password">
                                                                                        <a href="{{ route('hosteller.password.request') }}"><i class="fa fa-question-circle" aria-hidden="true"></i>Forgot your password?</a>
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
