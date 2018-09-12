    @extends('individualHostel.master')
    @section('custom-css1')
        <link rel="stylesheet" href="{{asset('dist/js/bootstrap.min.js')}}">
        @endsection
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
                    @if(auth('hosteller')->check())
                        <div class="vk-notification-boxes">
                            <div class="vk-notification-boxes-body">
                                <ul class="vk-alert vk-alert-danger ">

                                    <li><span><i class="fa fa-warning" aria-hidden="true"></i></span>Dear {{auth('hosteller')->user()->fullName}}, you can not reserve a bed. {{--<a href="#">Click here</a>--}}</li>
                                    <li><span><i class="fa fa-warning" aria-hidden="true"></i></span>You can only view this page since you a hostel {{auth('hosteller')->user()->role}} {{--<a href="#">Click here</a>--}}</li>

                                </ul>
                            </div>
                        </div>
                        @endif

                    @if($errors->has('modal'))
                    <!-- Button trigger modal -->
                        {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Launch demo modal
                        </button>--}}

                        {{--<div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Some text in the modal.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>--}}

                        <!-- Modal -->
                        <div class="clear clearfix modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        @php
                                            $user =$reservation->whereUserId(auth('web')->id())->first();


                                        echo '<h5 class="modal-title" id="ModalCenterTitle">You have already reserved a bed at '.$user->hostel->name.'</h5>'
                                        @endphp
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Do you want to undo your previous reservation and proceed with the current one?</p>
                                        <span>Click <b>Yes</b> to unreserve bed unreserve bed and continue with the current one</span><br>
                                        <span>Click <b>No</b> to continue with your previous reservation</span><br>

                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{request()->getRequestUri().'/unreserve'}}" method="get">
                                            @csrf
                                            <button type="submit" class="vk-btn vk-btn-m vk-btn-default pull-right"> Yes</button>
                                        </form>
                                        <form action="{{request()->getRequestUri().'/previousReservation'}}" method="get">
                                            @csrf
                                            <button type="submit" class="vk-btn vk-btn-m vk-btn-transparent"> No</button>
                                        </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                    {{--@if($errors->has('modal'))--}}
                        <div class="clear clearfix"></div>

                    @elseif($errors->any())
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
                    @if(session('unreserve'))
                        <div class="vk-notification-boxes">
                            <div class="vk-notification-boxes-body">
                                <ul class="vk-alert vk-alert-success ">

                                        <li><span><i class="fa fa-check" aria-hidden="true"></i></span> {{session()->get('unreserve')}} {{--<a href="#">Click here</a>--}}</li>

                                </ul>
                            </div>
                        </div>
                    @endif
                    <form class="row" method="post" action="" id="roomsAvailable">
                    @auth('web')
                        @csrf
                    @endauth
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
                                            @if((\Illuminate\Support\Facades\Auth::user()->sex == $room->sex_type) && ($reservation->isRoomFull($room->id)) == false )
                                                                            <div class="product-chooser-item  no-room-gutter">
                                                                                @elseif($room->sex_type == 'No Gender' && ($reservation->isRoomFull($room->id)) == false)
                                                                            <div class="product-chooser-item no-room-gutter">
                                                                                @else
                                                                            <div class="product-chooser-item disabled no-room-gutter">
                                                                            @endif
                                                                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 no-room-gutter" title="{{($room->name)?($room->name):('Room '.$room->number)}}&nbsp;| {{$room->roomDescription->room_type}} &nbsp;| {{$room->sex_type}}">

                                                                                    <span class="title" title="{{($room->name)?($room->name):('Room '.$room->number)}}">{{($room->name)?($room->name):('Room '.$room->number)}}</span>

                                                                                    <span class="title">{{$room->roomDescription->room_type}}</span>
                                                                                    <span class="description">Price: {{$room->roomDescription->price}}</span><br>
                                                                                            <span class="description">{{$room->sex_type}}</span>
                                                                                    <span class="description">{{($room->reservations->count()==$room->roomDescription->number_of_beds) ? 'Room Full' : $room->reservations->count().'/'.$room->roomDescription->number_of_beds}}</span>
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
                                @auth('web')
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

                                @endauth
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
        {{--<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>--}}
        {{--<script src="{{asset('js/vue.js')}}"></script>--}}

        @auth('web')
        <script>

            @if(session()->has('errors'))
            $(window).load(function(){
                $('#myModal').modal('show');
            });

            @endif

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
            {{--/*$('input[type="radio"]').on('change', function() {
                $('.child').prop("checked", false); // Reset all child checkbox
                // Check if it's a parent or child being checked
                if ($(this).hasClass('parent')) {
                    $('.child').prop('required', false); // Set all children to not required
                    $(this).next('ul').find('.child').prop('required', true); // Set the children of the selected parent to required
                } else if ($(this).hasClass('child')) {
                    $(this).prop("checked", true); // Check the selected child
                    $(this).parent().parent().prev('.parent').prop('checked', true); // Check the selected parent
                }
            });*/--}}


        </script>
        @endauth
    @endsection
