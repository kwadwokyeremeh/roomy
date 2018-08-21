@extends('individualHostel.master')
@section('main-content')

<div class="vk-select-room">
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

        <div class="vk-select-room-content">
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
                            {{--<span class="round-tabs five">
                              <i class="fa fa-check" aria-hidden="true"></i>
                         </span>--}}
                        </li>
                        <li>
                            <a href="javascript:void(0);">2.Make Payment</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);">3. Confirmation</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                    </ul>
                </div>

                <form class="row" method="POST" action="" id="roomsAvailable">
                    @csrf
                    <div class="vk-select-room-info">
                        <div class="col-md-9">
                            <div class="vk-shortcode-accordion-body">
                                <fieldset class="container" id="selectedRoom">
                                    @foreach($blocks as $block)
                                    <div class="row">
                                        <h2>{{$block->name}}</h2>
                                        <div class="vk-accordion-default col-md-9">
                                            @foreach($block->floors as $floor)
                                            <h4 class="vk-accordion-toggle-default">{{$floor->name}}</h4>
                                            <div class="vk-accordion-content-default">
                                                    {{--List Rooms--}}
                                                <div class="row product-chooser no-gutters">
                                                    @foreach($floor->rooms as $room)
                                                    <div class=" col-xs-4 col-sm-3 col-md-2 col-lg-2 no-room-gutter">
                                                        <div class=" product-chooser-item no-room-gutter">
                                                            <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 no-room-gutter">
                                                                <span class="title">{{$room->number}}</span>
                                                                <span class="title">{{$room->roomDescription->room_type}}</span>
                                                                <span class="description">Lorem ipsum dolor sit amet.</span>
                                                                <label for="selectedRoom">
                                                                <input type="radio" name="selectedRoom" value="{{$room->id}}" v-model="picked" />
                                                                </label>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                    <div class="clearfix"></div>
                                    @endforeach


                                </fieldset>

                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="vk-room-details-content-right">
                                <h3>Your Reservation</h3>
                                <div class="vk-select-room1">
                                    <h2>@{{ picked }}</h2>
                                    <ul>
                                        <li>Adults: 2</li>
                                        <li> Children: 1</li>
                                        <li><a href="#"> Change room</a></li>
                                    </ul>
                                </div>
                                <div class="vk-select-room2">
                                    <h2>Room2: Select Your Room</h2>
                                    <ul>
                                        <li>Adults: 2</li>
                                        <li>Children:1</li>
                                    </ul>
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
                                                    {{--<input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="previous" value="Previous" data-value="Previous">
                                               --}} </div>
                                                <div class="col-xs-6">
                                                    <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="next" value="Next" data-value="Next">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                </form>





            </div>


        </div>
    </section>
    <!--END CONTENT ABOUT-->

</div>

@endsection

@section('custom-script')
    {{--<script src="{{asset('js/vue.js')}}"></script>--}}
    <script>
        $(function(){
            $('div.product-chooser').not('.disabled').find('div.product-chooser-item').on('click', function(){
                $(this).parent().parent().find('div.product-chooser-item').removeClass('selected');
                $(this).addClass('selected');
                $(this).find('input[type="radio"]').prop("checked", true);

            });
        });


    </script>
@endsection
