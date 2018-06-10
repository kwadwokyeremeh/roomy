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
                                                            <form class="woocomerce-form woocommerce-form-login login" method="POST" action="{{ route('register') }}">
                                                                @csrf
                                                                        <h3>Enter your personal details</h3>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <p class="col-md-6 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field_detail" data-priority="10">
                                                                                <label for="first_name" class="">First name <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="firstName" type="text" class="input-text {{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                                                @if ($errors->has('firstName'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="col-md-6 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field_detail" data-priority="10">
                                                                                <label for="last_name" class="">Last name <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="name" type="text" class="input-text {{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                                                                @if ($errors->has('lastName'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong>{{ $errors->first('lastName') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="col-md-8 form-row form-row-last validate-required" id="email" data-priority="20">
                                                                                <label for="email" class="">Email <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="email" type="email" class="input-text {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                                                @if ($errors->has('email'))
                                                                                    <span class="invalid-feedback">
                                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </p>


                                                                            <p class="col-md-4 form-row form-row-last validate-required" id="phone" data-priority="20">
                                                                                <label for="phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="phone" type="phone" class="input-text{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                                                                                @if ($errors->has('phone'))
                                                                                    <span class="invalid-feedback">
                                                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </p>

                                                                            <p class="col-md-6 form-row form-row-last validate-required" id="password" data-priority="20">
                                                                                <label for="password" class="">Password <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="password" type="password" class="input-text {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                                                @if ($errors->has('password'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong>{{ $errors->first('password') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="col-md-6 form-row form-row-last validate-required" id="password" data-priority="20">
                                                                                <label for="password" class="">Confirm Password <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="password" class="input-text " name="password_confirmation" id="password" placeholder="" value="" >
                                                                            </p>

                                                                            <div class="form-row form-row-last validate-required" id="sex_field_detail">
                                                                                <div role="radiogroup" class="">
                                                                                    <label for="sex" class="">Sex</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    <label class="radio-inline" for="inline-radio1">
                                                                                        <input type="radio" id="inline-radio1" name="inline-radios" value="female" class="custom-control-input">
                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                        <span class="custom-control-description">Female</span>
                                                                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    <label class="radio-inline" for="inline-radio2">
                                                                                        <input type="radio" id="inline-radio2" name="inline-radios" value="male" class="custom-control-input">
                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                        <span class="custom-control-description">Male</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                            </form>
                                                        </div>

                                                                </div>
                                                            </div>



                                                            <div class="vk-checkout-order-paypal">
                                                                <div class="row">
                                                                    <div id="order_review" class="woocommerce-checkout-review-order">


                                                                        <div class="col-md-12">
                                                                            <div id="payment" class="woocommerce-checkout-payment">

                                                                                <div class="form-row place-order">
                                                                                    <noscript>
                                                                                        Since your browser does not support JavaScript, or it is disabled, please ensure you click the &lt;em&gt;Update Totals&lt;/em&gt; button before placing your order. You may be charged more than the amount stated above if you fail to do so.			&lt;br/&gt;&lt;input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" /&gt;
                                                                                    </noscript>


                                                                                    <a href="dashboard/student/student.php"><input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="register" value="Register" data-value="register"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>

                                                </div>
                                            </div><!-- .entry-content -->
                                        </div>
                    </main></div>
                                </div>


        </section>
    </div> <!-- Primary end -->
                        </div>
                    </main>
                </div>
            </div>
        </section>


    </div>
</div>



@endsection
