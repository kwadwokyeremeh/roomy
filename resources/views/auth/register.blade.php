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
                            <h2>Register</h2>
                            <h3>
                                <a href="#">Register to start your session</a>
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
                                                    <div class="woocommerce-info" style="margin-bottom: 1px">
                                                        <i class="fa fa-info-circle" aria-hidden="true"></i> Registration
                                                        <div class="pull-right">
                                                            <p>Already registered, <a href="{{route('login')}}">Click here to sign in</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="vk-checkout-login">

                                                        <div class="row">
                                                            <form class="woocomerce-form woocommerce-form-login login multi-submit-prevent" method="POST" action="{{ route('register') }}">
                                                                @csrf
                                                                        <p>Enter your personal details</p>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <p class="col-md-6 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field_detail" data-priority="10">
                                                                                <label for="firstName" class="">First name <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="firstName" type="text" class="input-text {{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                                                @if ($errors->has('firstName'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('firstName') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="col-md-6 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field_detail" data-priority="10">
                                                                                <label for="lastName" class="">Last name <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="lastName" type="text" class="input-text {{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                                                                @if ($errors->has('lastName'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('lastName') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="col-md-8 form-row form-row-last validate-required mb-5" id="email" data-priority="20">
                                                                                <label for="email" class="">Email <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="email" type="email" class="input-text {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                                                @if ($errors->has('email'))
                                                                                    <span class="invalid-feedback">
                                                                                    <strong style="color: #ff0000;">{{ $errors->first('email') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </p>


                                                                            <p class="col-md-4 form-row form-row-last validate-required mb-5" id="phone" data-priority="20">
                                                                                <label for="phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="phone" type="tel" class="input-text{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                                                                                @if ($errors->has('phone'))
                                                                                    <span class="invalid-feedback">
                                                                                    <strong style="color: #ff0000;">{{ $errors->first('phone') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </p>


                                                                                <p role="radiogroup" class="form-row form-row-last validate-required mt-5" >
                                                                                    <label for="sex" class="">Sex</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    <label class="radio-inline" for="inline-radio1">
                                                                                        <input type="radio" id="inline-radio1" name="sex" value="F" class="custom-control-input" required>
                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                        <span class="custom-control-description">Female</span>
                                                                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    <label class="radio-inline" for="inline-radio2">
                                                                                        <input type="radio" id="inline-radio2" name="sex" value="M" class="custom-control-input">
                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                        <span class="custom-control-description">Male</span>
                                                                                    </label>
                                                                                    @if ($errors->has('sex'))
                                                                                        <span class="invalid-feedback">
                                                                                    <strong style="color: #ff0000;">{{ $errors->first('sex') }} </strong>
                                                                                </span>
                                                                                    @endif
                                                                                </p>




                                                                            <p class="col-md-6 form-row form-row-last validate-required" id="password" data-priority="20">
                                                                                <label for="password" class="">Password <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="password" type="password" class="input-text {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                                                @if ($errors->has('password'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('password') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="col-md-6 form-row form-row-last validate-required" id="password" data-priority="20">
                                                                                <label for="password" class="">Confirm Password <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="password" class="input-text " name="password_confirmation" id="password" placeholder="" value="" >
                                                                            </p>


                                                                            <div class="row">
                                                                                <div class="form-row">
                                                                                    <button type="submit" class="vk-btn  vk-btn-l vk-btn-default text-uppercase multi-submit-prevent">
                                                                                        {{ __('Register') }}
                                                                                    </button>

                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                            </form>
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
                    </main>
                </div>
                                </div>


        </section>
    </div> <!-- Primary end -->
                        </div>



@endsection
