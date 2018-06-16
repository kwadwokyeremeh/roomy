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
                            <a href="#">Add Amenities</a>
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

                                                                        <h3>Add amenities</h3>
                                                                        <h4>Now let us know the facilities you have available in your hostel</h4>
                                                                        <h3>General Facilities</h3>
                                                                        <div class="row">

                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="4">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Backup plant</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="5">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Parking Space</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="6">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Library</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="7">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Swimming pool</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="8">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Air conditioned rooms</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="9">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">TV/Common rooms</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="10">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Study rooms</span>
                                                                                </label><br>
                                                                            </p><!----><!---->

                                                                            <div class="form-group col-md-6">
                                                                                <form name="add_name" id="add_name">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table" id="general">
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <!--<label class="custom-checkbox custom-control">
                                                                                                        <input type="checkbox" autocomplete="off" class="custom-control-input" value="other">
                                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>


                                                                                                    </label>-->
                                                                                                    <span class="custom-control-description">Please add any other</span>
                                                                                                </td>
                                                                                                <td><button type="button" name="add" id="add_general" class="vk-btn vk-btn-m  vk-btn-default"><i class="fa fa-plus"></i></button></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <h3>Services</h3>
                                                                        <div class="row">
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="1">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Daily housekeeping</span>
                                                                                </label><br>
                                                                            </p>
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="11">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">WiFi Access</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="11">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">24 hour reception/portal</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="11">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">DsTV subscription</span>
                                                                                </label><br>
                                                                            </p>
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="3">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">24 hour security</span>
                                                                                </label><br>
                                                                            </p><!----><!---->

                                                                            <div class="form-group col-md-6">
                                                                                <form name="add_name" id="add_name">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table" id="services">
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <!--<label class="custom-checkbox custom-control">
                                                                                                        <input type="checkbox" autocomplete="off" class="custom-control-input" value="other">
                                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>


                                                                                                    </label>-->
                                                                                                    <span class="custom-control-description">Please add any other services provided</span>
                                                                                                </td>
                                                                                                <td><button type="button" name="add" id="add_services" class="vk-btn vk-btn-m  vk-btn-default"><i class="fa fa-plus"></i></button></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <h3>Food and Drink</h3>
                                                                        <div class="row">
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="10">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Restaurant</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="10">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Bar</span>
                                                                                </label><br>
                                                                            </p>
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="2">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Catering Services</span>
                                                                                </label><br>
                                                                            </p><!----><!---->

                                                                            <div class="form-group col-md-6">
                                                                                <form name="add_name" id="add_name">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table" id="food">
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <!--<label class="custom-checkbox custom-control">
                                                                                                        <input type="checkbox" autocomplete="off" class="custom-control-input" value="other">
                                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                        <span class="custom-control-description">Please specify any other</span>
                                                                                                        <input type="text" name="name[]" placeholder="Please specify any other" class="form-control name_list" />
                                                                                                    </label>-->
                                                                                                    <span class="custom-control-description">Please specify any other catering services provided</span>
                                                                                                </td>
                                                                                                <td><button type="button" name="add" id="add_food" class="vk-btn vk-btn-m  vk-btn-default"><i class="fa fa-plus"></i></button></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <h3>Entertainment</h3>
                                                                        <div class="row">
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="10">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Board Games</span>
                                                                                </label><br>
                                                                            </p><!----><!---->

                                                                            <div class="form-group col-md-6">
                                                                                <form name="add_name" id="add_name">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table" id="entertainment">
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <!--<label class="custom-checkbox custom-control">
                                                                                                        <input type="checkbox" autocomplete="off" class="custom-control-input" value="other">
                                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                        <span class="custom-control-description">Please specify any other</span>
                                                                                                        <input type="text" name="name[]" placeholder="Please specify any other" class="form-control name_list" />
                                                                                                    </label>-->
                                                                                                    <span class="custom-control-description">Please specify any other entertainment provided</span>
                                                                                                </td>
                                                                                                <td><button type="button" name="add" id="add_entertainment" class="vk-btn vk-btn-m  vk-btn-default"><i class="fa fa-plus"></i></button></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <h3>Utilities</h3>
                                                                        <div class="row">
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="10">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Monthly fuel(gas) refill</span>
                                                                                </label><br>
                                                                            </p>
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" autocomplete="off" class="custom-control-input" value="10">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">ECG credit(once in a year)</span>
                                                                                </label><br>
                                                                            </p><!----><!---->

                                                                            <div class="form-group col-md-6">
                                                                                <form name="add_name" id="add_name">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table" id="utilities">
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <!--<label class="custom-checkbox custom-control">
                                                                                                        <input type="checkbox" autocomplete="off" class="custom-control-input" value="other">
                                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                        <span class="custom-control-description">Please specify any other</span>
                                                                                                        <input type="text" name="name[]" placeholder="Please specify any other" class="form-control name_list" />
                                                                                                    </label>-->
                                                                                                    <span class="custom-control-description">Please specify any other utilities provided</span>
                                                                                                </td>
                                                                                                <td><button type="button" name="add" id="add_utilities" class="vk-btn vk-btn-m  vk-btn-default"><i class="fa fa-plus"></i></button></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
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
                                                                                        <a href="03_add_media.php"><input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="previous" value="Previous" data-value="Previous"></a>
                                                                                    </div>
                                                                                    <div class="col-xs-6">
                                                                                        <a href="05_layout.php"> <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="next" value="Next" data-value="Next"></a>
                                                                                    </div> </div>
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
