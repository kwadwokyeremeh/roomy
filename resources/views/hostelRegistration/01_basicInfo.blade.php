

    <section class="site-content-area">
        <div class="vk-gallery-grid-full-banner">
            <div class="vk-about-banner">
                <div class="vk-about-banner-destop">
                    <div class="vk-banner-img"></div>
                    <div class="vk-about-banner-caption">
                        <h2>Register your hostel</h2>
                        <h3>
                            <a href="#">Register your hostel</a>
                            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            <a href="#">Basic Information</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="vk-select-room-content">
            <div class="container">
                <div class="vk-select-room-breakcrumb">
                    <ul>
                        <li class="active">
                            <a href="javascript:void(0);" style="font-size: 0.55em">1.Basic Info</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" style="font-size: 0.55em">2.Hostel Details</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" style="font-size: 0.55em">3.Add media</a>
                            <span class="round-tabs five">
                              <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" style="font-size: 0.55em">4.Amenities</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" style="font-size: 0.55em"><small>5.Layout and Pricing</small></a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" style="font-size: 0.55em">6.Policies</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" style="font-size: 0.55em">7.Payment</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" style="font-size: 0.55em">8.Confirmation</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>

                    </ul>
                    {{--@include('hostelRegistration._partials.progressBar')--}}
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

                                                        <div class="row">
                                                            <div class="vk-checkout-billing-left">
                                                                <div class="col-md-12">
                                                                    <div class="woocommerce-billing-fields">
                                                                    <form action="{{ route('hostel.registration.submit', [$step::$slug]) }}" method="POST">
                                                                            @csrf
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                @if(Auth::guard('hosteller')->user()->role == 'manager')
                                                                        <h3>Hostel Owner Details</h3>

                                                                            <p class="form-row form-row-last validate-required col-md-6" id="billing_last_name_field_detail" data-priority="20">
                                                                                <label for="first_name" class="">First name <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="firstName" type="text" class="input-text {{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" autofocus>

                                                                                @if ($errors->has('firstName'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('firstName') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                                </p>
                                                                            <p class="form-row form-row-last validate-required col-md-6" id="billing_last_name_field_detail" data-priority="20">
                                                                                <label for="last_name" class="">Last name <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="name" type="text" class="input-text {{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" autofocus>

                                                                                @if ($errors->has('lastName'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('lastName') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required col-md-7" id="email" data-priority="20">
                                                                                <label for="email" class="">Email <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="email" type="email" class="input-text {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                                                                                @if ($errors->has('email'))
                                                                                    <span class="invalid-feedback">
                                                                                    <strong style="color: #ff0000;">{{ $errors->first('email') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required col-md-5" id="phone" data-priority="20">
                                                                                <label for="phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="phone" type="tel" class="input-text{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}">

                                                                                @if ($errors->has('phone'))
                                                                                    <span class="invalid-feedback">
                                                                                    <strong style="color: #ff0000;">{{ $errors->first('phone') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </p>
                                                                            <input type="hidden" name="role" value="owner" >
                                                                @else
                                                                        <h3>Hostel Manager Details</h3>


                                                                            <p class="form-row form-row-last validate-required col-md-6" id="billing_last_name_field_detail" data-priority="20">
                                                                                <label for="first_name" class="">First name <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="firstName" type="text" class="input-text {{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName_2') }}" autofocus>

                                                                                @if ($errors->has('firstName'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('firstName') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required col-md-6" id="billing_last_name_field_detail" data-priority="20">
                                                                                <label for="last_name" class="">Last name <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="name" type="text" class="input-text {{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" autofocus>

                                                                                @if ($errors->has('lastName'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('lastName') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required col-md-7" id="email" data-priority="20">
                                                                                <label for="email" class="">Email <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="email" type="email" class="input-text {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                                                                                @if ($errors->has('email'))
                                                                                    <span class="invalid-feedback">
                                                                                    <strong style="color: #ff0000;">{{ $errors->first('email') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required col-md-5" id="phone" data-priority="20">
                                                                                <label for="phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="phone" type="tel" class="input-text{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}">

                                                                                @if ($errors->has('phone'))
                                                                                    <span class="invalid-feedback">
                                                                                    <strong style="color: #ff0000;">{{ $errors->first('phone') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </p>
                                                                            <input type="hidden" name="role" value="manager" >

@endif

                                                                        <h3>Hostel Portal Details</h3>


                                                                            <p class="form-row form-row-last validate-required col-md-6" id="billing_last_name_field_detail" data-priority="20">
                                                                                <label for="first_name" class="">First name <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="firstName" type="text" class="input-text {{ $errors->has('firstName_3') ? ' is-invalid' : '' }}" name="firstName_3" value="{{ old('firstName_3') }}" autofocus>

                                                                                @if ($errors->has('firstName_3'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('firstName_3') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required col-md-6" id="billing_last_name_field_detail" data-priority="20">
                                                                                <label for="last_name" class="">Last name <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="name" type="text" class="input-text {{ $errors->has('lastName_3') ? ' is-invalid' : '' }}" name="lastName_3" value="{{ old('lastName_3') }}" autofocus>

                                                                                @if ($errors->has('lastName_3'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('lastName_3') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required col-md-7" id="email" data-priority="20">
                                                                                <label for="email" class="">Email <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="email" type="email" class="input-text {{ $errors->has('email_3') ? ' is-invalid' : '' }}" name="email_3" value="{{ old('email_3') }}">

                                                                                @if ($errors->has('email_3'))
                                                                                    <span class="invalid-feedback">
                                                                                    <strong style="color: #ff0000;">{{ $errors->first('email_3') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required col-md-5" id="phone" data-priority="20">
                                                                                <label for="phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                                                                <input id="phone" type="tel" class="input-text{{ $errors->has('phone_3') ? ' is-invalid' : '' }}" name="phone_3" value="{{ old('phone_3') }}">

                                                                                @if ($errors->has('phone_3'))
                                                                                    <span class="invalid-feedback">
                                                                                    <strong style="color: #ff0000;">{{ $errors->first('phone_3') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </p>
                                                                            <input type="hidden" name="role_3" value="portal" >


                                                                        </div>
                                                                        @include('hostelRegistration._partials.wizardControl')
                                                                    </form>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                        </div>
                                                    </div><!-- .entry-content -->
                                                </div>
                                            </div>
                                        </div>


                                    </div> <!-- Primary end -->
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>

    </section>

