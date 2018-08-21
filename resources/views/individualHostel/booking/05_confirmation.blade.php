@extends('individualHostel.master')
@section('main-content')
<div class="vk-confirmation">

    <!--BENGIN CONTENT HEADER-->
    <section class="site-content-area">
        <div class="vk-gallery-grid-full-banner">
            <div class="vk-about-banner">
                <div class="vk-about-banner-destop">
                    <div class="vk-bed-banner-img"></div>
                    <div class="vk-about-banner-caption">
                        <h2>Reserve a bed</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="vk-confirmation-content">
            <div class="container">
                <div class="vk-select-room-breakcrumb">
                    <ul>
                        {{--<li class="completed">
                            <a href="javascript:void(0);">1. Personal Information</a>
                        </li>
                        <li class="active">
                            <a href="javascript:void(0);">2. Hostel</a>
                            <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>--}}
                        <li class="active make-a-reservation">
                            <a href="javascript:void(0);">1. Select a room</a>

                        </li>
                        <li class="make-a-reservation">
                            <a href="javascript:void(0);">2.Make Payment</a>
                            <span class="round-tabs five">
                              <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li class="confirmation">
                            <a href="javascript:void(0);">3. Confirmation</a>
                            <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                    </ul>
                </div>


                <div class="row">
                    <div class="vk-confirmation-info">
                        <div class="col-md-8">
                            <div class="vk-confirmation-left">
                                <h2>Reservation Completed!</h2>
                                <p>Your reservation details have just been sent to your email. If you have any question,
                                    please don't hesitate to contact us. Thank you!</p>
                                <ul>
                                    <li>
                                        <span class="ti-mobile"></span> (+233) 123 456789
                                    </li>
                                    <li> <span class="ti-email"></span> contact@sparta.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="vk-confirmation-right">
                                <div class="vk-make-a-reservation-right">
                                    <h3>Your Reservation</h3>
                                    <div class="vk-make-a-room">
                                        <div class="vk-make-a-room1">
                                            <h3>Room 1 : Class Room <span>($200/night)</span></h3>
                                            <ul>
                                                <li>Adult: 2</li>
                                                <li>Children: 1</li>
                                                <li>night(s): 2</li>
                                            </ul>
                                            <h4>$400.00</h4>
                                        </div>
                                        <div class="vk-make-a-room2">
                                            <h3>Room 2 : Double Room <span>($200/night)</span></h3>
                                            <ul>
                                                <li>Adult: 2</li>
                                                <li>Children: 1</li>
                                                <li>night(s): 2</li>
                                            </ul>
                                            <h4>$400.00</h4>
                                        </div>
                                    </div>
                                    <div class="vk-make-a-total">
                                        <table class="shop_table shop_table_responsive">
                                            <tbody>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td data-title="Tổng cộng"><strong>$800.00</strong> </td>
                                            </tr>
                                            <tr class="tax-total">
                                                <th>Tax 10%</th>
                                                <td data-title="Thuế">$80.00</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="vk-make-a-grand-total">
                                        <table class="shop_table shop_table_responsive">
                                            <tbody>
                                            <tr class="order-total">
                                                <th>Grand Total</th>
                                                <td data-title="Grand-total"><strong>$880.00</strong> </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vk-shop-checkout-body">




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
                                                <a href="booking_payment.php"><input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="previous" value="Previous" data-value="Previous"></a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="#"><input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="next" value="Submit" data-value="submit"></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>


        </div>
    </section>
    <!--END CONTENT ABOUT-->

</div>
@endsection

@section('custom-script')


@endsection
