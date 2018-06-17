@extends('hostelRegistration.master')

@section('main-content')

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
                            <a href="javascript:void(0);">1.Basic Info</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><small>2.Hostel Details</small></a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);">3.Add media</a>
                            <span class="round-tabs five">
                              <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);">4.Amenities</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><small>5.Layout and Pricing</small></a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);">6.Policies</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);">7.Payment</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>

                    </ul>
                    @include('hostelRegistration._partials.progressBar')
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

                                                                        <h3>Hostel Manager Details</h3>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field_detail" data-priority="10">
                                                                                <label for="title" class="">Title <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="" class=" " name="title" id="title" placeholder="" value="" autocomplete="given-name">
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="billing_last_name_field_detail" data-priority="20">
                                                                                <label for="first_name" class="">First name <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text " name="first_name" id="first_name" placeholder="" value="" >
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="billing_last_name_field_detail" data-priority="20">
                                                                                <label for="last_name" class="">Last name <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text " name="last_name" id="last_name" placeholder="" value="" >
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="email" data-priority="20">
                                                                                <label for="email" class="">Email <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="email" class="input-text " name="email" id="email" placeholder="" value="" >
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="phone" data-priority="20">
                                                                                <label for="phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="tel" class="input-text " name="phone" id=phone" placeholder="" value="" >
                                                                            </p>


                                                                        </div>
                                                                        <h3>Hostel Portal Details</h3>
                                                                        <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field_detail" data-priority="10">
                                                                            <label for="title" class="">Title <abbr class="required" title="required">*</abbr></label>
                                                                            <input type="" class=" " name="title" id="title" placeholder="" value="" autocomplete="given-name">
                                                                        </p>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field_detail" data-priority="10">
                                                                                <label for="first_name" class="">First name <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text " name="first_name" id="first_name" placeholder="" value="" autocomplete="given-name">
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="billing_last_name_field_detail" data-priority="20">
                                                                                <label for="last_name" class="">Last name <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text " name="last_name" id="last_name" placeholder="" value="" >
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="phone" data-priority="20">
                                                                                <label for="phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="tel" class="input-text " name="phone" id=phone" placeholder="" value="" >
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="email" data-priority="20">
                                                                                <label for="email" class="">Email <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="email" class="input-text " name="email" id="email" placeholder="" value="" >
                                                                            </p>


                                                                        </div>
                                                                        <h3>Hostel Owner Details</h3>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field_detail" data-priority="10">
                                                                                <label for="title" class="">Title <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="" class=" " name="title" id="title" placeholder="" value="" autocomplete="given-name">
                                                                            </p>
                                                                            <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field_detail" data-priority="10">
                                                                                <label for="first_name" class="">First name <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text " name="first_name" id="first_name" placeholder="" value="" autocomplete="given-name">
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="billing_last_name_field_detail" data-priority="20">
                                                                                <label for="last_name" class="">Last name <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text " name="last_name" id="last_name" placeholder="" value="" >
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="phone" data-priority="20">
                                                                                <label for="phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="tel" class="input-text " name="phone" id=phone" placeholder="" value="" >
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="email" data-priority="20">
                                                                                <label for="email" class="">Email <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="email" class="input-text " name="email" id="email" placeholder="" value="" >
                                                                            </p>


                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>



                                                           @include('hostelRegistration._partials.wizardControl')
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

@endsection
