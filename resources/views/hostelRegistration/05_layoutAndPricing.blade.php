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
                            <a href="#">Layout and Pricing</a>
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
                            <a href="javascript:void(0);">1.Basic Info</a>
                        </li>
                        <li class="active">
                            <a href="javascript:void(0);"><small>2.Hostel Details</small></a>
                            <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li class="make-a-reservation">
                            <a href="javascript:void(0);">3.Add media</a>
                            <span class="round-tabs five">
                              <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li class="confirmation">
                            <a href="javascript:void(0);">4.Amenities</a>
                            <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li class="confirmation">
                            <a href="javascript:void(0);"><small>5.Layout and Pricing</small></a>
                            <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
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

                                                                        <h3>Rooms and Prices</h3>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="one_in_a_room" data-priority="10">
                                                                                <label for="one_in_a_room" class="">One in a room <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="number" class="input-text" name="one_in_a_room" id="one_in_a_room" placeholder="Please enter the price of the room" value="" autocomplete="">
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="two_in_a_room" data-priority="20">
                                                                                <label for="two_in_a_room" class="">Two in a room <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="number" class="input-text " name="two_in_a_room" id="two_in_a_room" placeholder="Please enter the price of the room" value="" >
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="three_in_a_room" data-priority="20">
                                                                                <label for="three_in_a_room" class="">Three in a room <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="number" class="input-text " name="three_in_a_room" id="three_in_a_room" placeholder="Please enter the price of the room" value="" >
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="four_in_a_room" data-priority="20">
                                                                                <label for="four_in_a_room" class="">Four in a room <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="number" class="input-text " name="four_in_a_room" id="four_in_a_room" placeholder="Please enter the price of the room" value="" >
                                                                            </p>


                                                                        </div>
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


                                                                                    <div class="col-xs-6">
                                                                                        <a href="04_amenities.php"><input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="previous" value="Previous" data-value="Previous"></a>
                                                                                    </div>
                                                                                    <div class="col-xs-6">
                                                                                        <a href="06_policies.php"> <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="next" value="Next" data-value="Next"></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

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

@endsection
