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

                @if($errors->any())
                    <div class="vk-notification-boxes">
                        <div class="vk-notification-boxes-body">
                            <ul class="vk-alert vk-alert-warning ">
                                @foreach($errors->all() as $error)
                                    <li><span><i class="fa fa-times-circle" aria-hidden="true"></i></span> {{$error}} {{--<a href="#">Click here</a>--}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <form class="row" method="POST" action="" id="roomsAvailable">
                    @csrf
                    <div class="vk-select-room-info">
                        <div class="col-md-9">
                            <div class="vk-shortcode-accordion-body">

                                    <div class="container" role="radiogroup">
                                        @foreach($blocks as $block)
                                            <div class="row">
                                                <h2>{{$block->name}}</h2>
                                                <div class="vk-accordion-default col-md-9">
                                                    @foreach($block->floors as $floor)
                                                        <h4 class="vk-accordion-toggle-default">{{$floor->name}}</h4>
                                                        <div class="vk-accordion-content-default">

                                                            {{--List Rooms--}}
                                                            <div class="row product-chooser no-gutters">
                                                                {{--<input type="radio"  data-smth="floor_{{$floor->id}}">--}}
                                                                @foreach($floor->rooms as $room)
                                                                    <div class=" col-xs-4 col-sm-3 col-md-2 col-lg-2 no-room-gutter">
                                        @if(\Illuminate\Support\Facades\Auth::user()->sex == $room->sex_type )
                                                                        <div class="product-chooser-item  no-room-gutter">
                                                                            @elseif($room->sex_type =='')
                                                                        <div class="product-chooser-item  no-room-gutter">
                                                                            @else
                                                                        <div class="product-chooser-item disabled no-room-gutter">
                                                                        @endif
                                                                            <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 no-room-gutter">
                                                                                @if($room->name)
                                                                                <span class="title">{{$room->name}}</span>
                                                                                @else
                                                                                <span class="title">{{$room->number}}</span>
                                                                                @endif
                                                                                <span class="title">{{$room->roomDescription->room_type}}</span>
                                                                                <span class="description">Price: {{$room->roomDescription->price}}</span>
                                                                                    @if($room->sex_type)
                                                                                        <span class="description">{{$room->sex_type}}</span>
                                                                                    @endif
                                                                                <label for="selectedRoom">
                                                                                    <input type="radio" name="selectedRoom" value="{{$room->id}}" required/>
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

                                        @endforeach


                                    </div>

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
                                                    <input type="submit" class="button alt" id="next" value="Next" data-value="Next">
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
        $(function() {
            $('.product-chooser').find('div.product-chooser-item').on('click', function () {
                $('.product-chooser').find('div.product-chooser-item').removeClass('selected').find('input[type="radio"]').prop("checked", false);
                if ($(this).is('.disabled')){

                }else {
                    $(this).addClass('selected');
                    $(this).find('input[type="radio"]').prop("checked", true);
                }



            });
        });
        /*$('input[type="radio"]').on('change', function() {
            $('.child').prop("checked", false); // Reset all child checkbox
            // Check if it's a parent or child being checked
            if ($(this).hasClass('parent')) {
                $('.child').prop('required', false); // Set all children to not required
                $(this).next('ul').find('.child').prop('required', true); // Set the children of the selected parent to required
            } else if ($(this).hasClass('child')) {
                $(this).prop("checked", true); // Check the selected child
                $(this).parent().parent().prev('.parent').prop('checked', true); // Check the selected parent
            }
        });*/







    </script>
@endsection
