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
                                <h2>Reset password</h2>
                                <h3>
                                    <a href="#">Enter your new password to continue</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="vk-shop-checkout-body" style="padding-bottom: 1px; padding-top: 20px">
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
                                                            <i class="fa fa-info-circle" aria-hidden="true"></i> Password must

                                                        </div>
                                                        <div class="vk-checkout-login">

                                                            <div class="row  vk-notification-boxes-body" style="padding-top: 1px; padding-bottom: 1px">
                                                                <div class="list-item" style="padding-bottom: 1px">

                                                                    <div class="vk-alert vk-alert-success" style="padding-bottom: 3px">
                                                                        <span><i class="fa fa-check-circle" aria-hidden="true"></i></span>Be at least 8 characters long.
                                                                    </div>

                                                                    <div class="vk-alert vk-alert-warning" style="padding-bottom: 3px">
                                                                        <span><i class="fa fa-times-circle" aria-hidden="true"></i></span> Have at least 1 upper case character.
                                                                    </div>

                                                                    <div class="vk-alert vk-alert-danger" style="padding-bottom: 3px">
                                                                        <span><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>  Have at least 1 numeric character.
                                                                    </div>
                                                                    <div class="vk-alert vk-alert-danger" style="padding-bottom: 3px">
                                                                        <span><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>  Have at least 1 symbol.
                                                                    </div>
                                                                </div>
                                                                <form class="woocomerce-form woocommerce-form-login login" method="POST" action="{{ route('hosteller.password.request') }}">
                                                                    @csrf

                                                                    <div class="col-md-12">
                                                                        <p class="form-row form-row-last">
                                                                            <label for="password" class="">Email <abbr class="required" title="required">*</abbr></label>
                                                                            <input id="email" type="email" class="input-text {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                                                        @if ($errors->has('email'))
                                                                            <span class="invalid-feedback">
                                                                                <strong style="color: #ff0000">{{ $errors->first('email') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p class="form-row form-row-last">
                                                                            <label for="password" class="">New Password <abbr class="required" title="required">*</abbr></label>
                                                                            <input id="password" type="password" class="input-text {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Please enter your new password" required>

                                                                            @if ($errors->has('password'))
                                                                                <span class="invalid-feedback">
                                                                                    <strong style="color: #ff0000">{{ $errors->first('password') }}</strong>
                                                                                </span>
                                                                            @endif</p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p class="form-row form-row-last">
                                                                            <label for="password" class="">Confirm Password <abbr class="required" title="required">*</abbr></label>

                                                                            <input id="password-confirm" type="password" class="input-text " name="password_confirmation" placeholder="Please confirm your password" required>
                                                                        </p>

                                                                    </div>
                                                                    <div class="clear"></div>


                                                                    <div class="">
                                                                        <div class="vk-checkout-login">
                                                                            <div class="row">
                                                                                <p class="form-row">
                                                                                    <input type="submit" class="button" name="reset_password" value="RESET PASSWORD">

                                                                                </p>


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
