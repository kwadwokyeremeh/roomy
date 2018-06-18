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
                            <a href="#">Hostel Policies</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="vk-confirmation-content">
            <div class="container">
                <div class="vk-select-room-breakcrumb">
                    <ul>
                        <li class="completed">
                            <a href="javascript:void(0);" style="font-size: 0.55em">1.Basic Info</a>
                        </li>
                        <li class="active">
                            <a href="javascript:void(0);" style="font-size: 0.55em"><small>2.Hostel Details</small></a>
                            <span class="round-tabs seven">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li class="make-a-reservation">
                            <a href="javascript:void(0);" style="font-size: 0.55em">3.Add media</a>
                            <span class="round-tabs seven">
                              <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li class="confirmation">
                            <a href="javascript:void(0);" style="font-size: 0.55em">4.Amenities</a>
                            <span class="round-tabs seven">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li class="confirmation">
                            <a href="javascript:void(0);" style="font-size: 0.55em"><small>5.Layout and Pricing</small></a>
                            <span class="round-tabs seven">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li class="confirmation">
                            <a href="javascript:void(0);" style="font-size: 0.55em">6.Policies</a>
                            <span class="round-tabs seven">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" style="font-size: 0.55em">7.Payment</a>
                            <span class="round-tabs seven">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" style="font-size: 0.55em">8.Confirmation</a>
                            <span class="round-tabs seven">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                    </ul>
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

                                                                        <!-- <h3>Personal details</h3>
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
                                                                     </div>  -->
                                                                @include('hostelRegistration._partials.wizardControl')
                                                            </form>
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
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>

    </section>

