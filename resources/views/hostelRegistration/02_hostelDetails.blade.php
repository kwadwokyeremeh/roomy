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
                            <a href="#">Hostel Details</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="vk-room-select-complete-content">
            <div class="container">
                <div class="vk-select-room-breakcrumb">
                    <ul>
                        <li class="completed">
                            <a href="javascript:void(0);" style="font-size: 0.55em">1.Basic Info</a>
                        </li>
                        <li class="active">
                            <a href="javascript:void(0);" style="font-size: 0.55em"><small>2.Hostel Details</small></a>
                            <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
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
                            <a href="javascript:void(0);" style="font-size: 0.55em">5.Layout</a>
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
                   {{-- @include('hostelRegistration._partials.progressBar')--}}
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
                                                                        <h3>Hostel Name</h3>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_hostel_name_field_detail" data-priority="20">
                                                                            <label for="hostel_name" class="">Hostel Name <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}"  name="name" id="hostel_name" placeholder="Enter your hostel name" autocomplete="given-name" required autofocus>

                                                                                @if ($errors->has('name'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('name') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="billing_hostel_slang_field_detail" data-priority="20">
                                                                                <label for="hostel_slang" class="">Hostel Slang <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text {{ $errors->has('alias') ? ' is-invalid' : '' }}" value="{{ old('alias') }}"  name="alias" id="hostel_alias" placeholder="Enter your hostel alias" autocomplete="given-name" autofocus>

                                                                                @if ($errors->has('alias'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('alias') }}</strong>
                                                                                    </span>
                                                                                @endif</p>
                                                                            <p class="col-md-7 form-row form-row-last validate-required" id="billing_hostel_email_field_detail" data-priority="20">
                                                                                <label for="hostel_email" class="">Hostel Official Email <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="email" class="input-text {{ $errors->has('hostel_email') ? ' is-invalid' : '' }}" value="{{ old('hostel_email') }}"  name="hostel_email" id="hostel_email" placeholder="Enter your hostel email" autocomplete="given-name" autofocus>

                                                                                @if ($errors->has('hostel_email'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('hostel_email') }}</strong>
                                                                                    </span>
                                                                                @endif</p>
                                                                            <p class="col-md-5 form-row form-row-last validate-required" id="billing_hostel_phone_field_detail" data-priority="20">
                                                                                <label for="hostel_phone" class="">Hostel Official Phone <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="tel" class="input-text {{ $errors->has('hostel_phone') ? ' is-invalid' : '' }}" value="{{ old('hostel_phone') }}"  name="hostel_phone" id="hostel_phone" placeholder="Enter your hostel phone" autocomplete="given-name" autofocus>

                                                                                @if ($errors->has('hostel_phone'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('hostel_phone') }}</strong>
                                                                                    </span>
                                                                                @endif</p>
                                                                        </div>

                                                                        <h3>Hostel Location</h3>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_hostel_location_field_detail" data-priority="20">
                                                                                <label for="street_address" class="">Street Address <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text {{ $errors->has('street_address') ? ' is-invalid' : '' }}" value="{{ old('street_address') }} " name="street_address" id="street_address" placeholder="Enter your hostel address" autocomplete="given-location" required>
                                                                                @if ($errors->has('street_address'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('street_address') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="billing_hostel_slang_field_detail" data-priority="20">
                                                                                <label for="city" class="">City <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text {{ $errors->has('city') ? ' is-invalid' : '' }}" value="{{ old('city') }}" name="city" id="city" placeholder="Enter City" >
                                                                                @if ($errors->has('city'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('city') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            {{--     Field for region and country
                                                                            <p class="form-row form-row-last validate-required" id="region_country" data-priority="20">
                                                                                <label for="region_country" class="">Region/Country <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text " name="region_country" id="region_country" placeholder="" value="" >
                                                                            </p>--}}
                                                                        </div>

                                                                        <h3>Information about your hostel</h3>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_total_number_of_blocks_field_detail" data-priority="20">
                                                                                <label for="total_number_of_blocks" class="">Total number of blocks <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="number" min=1 class="input-text {{ $errors->has('number_of_blocks') ? ' is-invalid' : '' }}" value="{{ old('number_of_blocks') }}" name="number_of_blocks" id="total_number_of_blocks" placeholder="Example; 3" autocomplete="1">
                                                                                @if ($errors->has('number_of_blocks'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('number_of_blocks') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            {{--<p class="form-row form-row-last validate-required" id="billing_total_number_of_rooms_field_detail" data-priority="20">
                                                                                <label for="last_name" class="">Total number of rooms <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="number" class="input-text " name="total_number_of_rooms" id="total_number_of_rooms" placeholder="" value="" >
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="total_number_of_floors" data-priority="20">
                                                                                <label for="total_number_of_floors" class="">Total number of floors <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="number" class="input-text " name="total_number_of_floors" id=total_number_of_floors" placeholder="" value="" >
                                                                            </p>

                                                                            <div class="form-row form-row-last validate-required" id="same_floor_field_detail">

                                                                                <div role="radiogroup" class="">
                                                                                    <label for="same_floor" class="">Does each floor has the same number of rooms?</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                                                        <div class="panel-group" id="accordion">
                                                                                            <div class="panel panel-default">
                                                                                                <div class="panel-heading">
                                                                                                    <h4 class="panel-title">
                                                                                                        <label for='r11' style='width: 350px;' class="radio-inline">
                                                                                                            <input type='radio' id='r11' name='inline-radios' value='yes' required class="custom-control-input"/>
                                                                                                            <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                            <span class="custom-control-description">Yes</span>
                                                                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"></a>
                                                                                                        </label>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                                                                    <div class="panel-body">

                                                                                                            <p class="form-row form-row-last validate-required" id="total_number_of_floors" data-priority="20">
                                                                                                                <label for="number_of_rooms_per_floors" class="">Number of rooms per floor <abbr class="required" title="required">*</abbr></label>
                                                                                                                <input type="number" class="input-text " name="number_of_rooms_per_floors" id=number_of_rooms_per_floors" placeholder="Compute the value, if yes" value="" >
                                                                                                            </p>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="panel panel-default">
                                                                                                <div class="panel-heading">
                                                                                                    <h4 class=panel-title>
                                                                                                        <label for='r12' style='width: 350px;' class="radio-inline">
                                                                                                            <input type='radio' id='r12' name='inline-radios' value='no' class="custom-control-input" required />
                                                                                                            <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                            <span class="custom-control-description">No</span>
                                                                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"></a>
                                                                                                        </label>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                                                                    <div class="panel-body">

                                                                                                            <p class="form-row form-row-last validate-required col-md-6" id="floor_name" data-priority="20">
                                                                                                                <label for="floor_name" class="">Floor Name <abbr class="required" title="required">*</abbr></label>
                                                                                                                <input type="text" class="input-text " name="floor_name" id="floor_name" placeholder="Floor 1" value="" >
                                                                                                            </p>
                                                                                                            <p class="form-row form-row-last validate-required col-md-6" id="number_of_rooms" data-priority="20">
                                                                                                                <label for="number_of_rooms" class="">Number of rooms <abbr class="required" title="required">*</abbr></label>
                                                                                                                <input type="number" class="input-text " name="number_of_rooms" id=number_of_rooms" placeholder="10" value="" >
                                                                                                            </p>
                                                                                                            <p class="form-row form-row-last validate-required col-md-6" id="floor_name" data-priority="20">
                                                                                                                <label for="floor_name" class="">Floor Name <abbr class="required" title="required">*</abbr></label>
                                                                                                                <input type="text" class="input-text " name="floor_name" id="floor_name" placeholder="Floor 1" value="" >
                                                                                                            </p>
                                                                                                            <p class="form-row form-row-last validate-required col-md-6" id="number_of_rooms" data-priority="20">
                                                                                                                <label for="number_of_rooms" class="">Number of rooms <abbr class="required" title="required">*</abbr></label>
                                                                                                                <input type="number" class="input-text " name="number_of_rooms" id=number_of_rooms" placeholder="10" value="" >
                                                                                                            </p>
                                                                                                            <p class="form-row form-row-last validate-required col-md-6" id="floor_name" data-priority="20">
                                                                                                                <label for="floor_name" class="">Floor Name <abbr class="required" title="required">*</abbr></label>
                                                                                                                <input type="text" class="input-text " name="floor_name" id="floor_name" placeholder="Floor 1" value="" >
                                                                                                            </p>
                                                                                                            <p class="form-row form-row-last validate-required col-md-6" id="number_of_rooms" data-priority="20">
                                                                                                                <label for="number_of_rooms" class="">Number of rooms <abbr class="required" title="required">*</abbr></label>
                                                                                                                <input type="number" class="input-text " name="number_of_rooms" id=number_of_rooms" placeholder="10" value="" >
                                                                                                            </p>
                                                                                                            <p class="form-row form-row-last validate-required col-md-6" id="floor_name" data-priority="20">
                                                                                                                <label for="floor_name" class="">Floor Name <abbr class="required" title="required">*</abbr></label>
                                                                                                                <input type="text" class="input-text " name="floor_name" id="floor_name" placeholder="Floor 1" value="" >
                                                                                                            </p>
                                                                                                            <p class="form-row form-row-last validate-required col-md-6" id="number_of_rooms" data-priority="20">
                                                                                                                <label for="number_of_rooms" class="">Number of rooms <abbr class="required" title="required">*</abbr></label>
                                                                                                                <input type="number" min="1" class="input-text " name="number_of_rooms" id=number_of_rooms" placeholder="10" value="" >
                                                                                                            </p>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                </div>




                                                                            </div>--}}
                                                                            <div role="group" class="form-group row">
                                                                                <h3 class="col-form-label">
                                                                                    Types of rooms available
                                                                                </h3>
                                                                                <div class="col-sm-12">
                                                                                    @if (count($errors->all()))
                                                                                        <div class="">
                                                                                            <ul class="errors"  style="color: #ff0000;">
                                                                                                @if ($errors->has('roomType.roomType.*'))
                                                                                                    <li class="invalid-feedback">
                                                                                            <strong style="color: #ff0000;">{{ $errors->first('roomType.roomType.*') }}</strong></li>
                                                                                                @endif
                                                                                                    @if ($errors->has('roomType.beds.*'))
                                                                                                        <li class="invalid-feedback">
                                                                                            <strong style="color: #ff0000;">{{ $errors->first('roomType.beds.*') }}</strong></li>
                                                                                                    @endif
                                                                                                    @if ($errors->has('roomType.price.*'))
                                                                                                        <li class="invalid-feedback">
                                                                                            <strong style="color: #ff0000;">{{ $errors->first('roomType.price.*') }}</strong></li>
                                                                                                    @endif
                                                                                                @else
                                                                                                    @foreach($errors->all() as $message)
                                                                                                        <li>{{ $message }}</li>
                                                                                                    @endforeach
                                                                                                @endif
                                                                                            </ul>
                                                                                        </div>



                                                                                        {{--<p>
                                                                                            <label class="custom-checkbox custom-control">
                                                                                                <input type="checkbox" id="oneInRoom" autocomplete="off" class="custom-control-input" name="roomType[roomType][]" value="One in a room with balcony and washroom">
                                                                                                <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                <span class="custom-control-description">One in a room</span>
                                                                                            </label><br>
                                                                                        </p>
                                                                                        <p>
                                                                                            <label class="custom-checkbox custom-control">
                                                                                                <input type="checkbox" id="twoInRoom" autocomplete="off" class="custom-control-input" name="roomType[roomType][]" value="Two in a room with balcony and washroom">
                                                                                                <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                <span class="custom-control-description">Two in a room</span>
                                                                                            </label><br>
                                                                                        </p>
                                                                                        <p>
                                                                                            <label class="custom-checkbox custom-control">
                                                                                                <input type="checkbox" id="threeInRoom" autocomplete="off" class="custom-control-input" name="roomType[roomType][]" value="Three in a room with balcony and washroom">
                                                                                                <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                <span class="custom-control-description">Three in a room</span>
                                                                                            </label><br>
                                                                                        </p>--}}
                                                                                    <div class="woocommerce-billing-fields__field-wrapper">

                                                                                        <div class="row" id="dynamic_field">
                                                                                            <div id="1">
                                                                                                <p class="col-sm-5 form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                                                                    <label class="" for="1">Room Type
                                                                                                        </label>
                                                                                                    <input type="text" name="roomType[roomType][]" placeholder="Room type" class=" input-text {{ $errors->has('roomType.roomType.0') ? ' is-invalid' : '' }}" value="{{ old('roomType.roomType.0') }}" required/></p>
                                                                                                <p class="col-sm-3 form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                                                                    <label class="" for="1">Price per bed
                                                                                                        </label>
                                                                                                    <input type="text" name="roomType[price][]" placeholder="Price" class=" input-text {{ $errors->has('roomType.price.0') ? ' is-invalid' : '' }}" value="{{ old('roomType.price.0') }}" required/></p>
                                                                                                <p class="col-sm-3 form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                                                                    <label class="" for="1">Number of bed(s) in the room
                                                                                                        </label>
                                                                                                    <input type="number" min="1" name="roomType[beds][]" placeholder="Number of bed(s)" class="input-text {{ $errors->has('roomType.beds.0') ? ' is-invalid' : '' }}" value=" {{ old('roomType.beds.0') }}" required/></p>
                                                                                            </div>
                                                                                        </div>
                                                                                            {{--<p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                                                                <label class="custom-checkbox custom-control">
                                                                                                    <input type="checkbox" autocomplete="off" class="col-md-1 custom-control-input" value="other">
                                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                    <span class="custom-control-description"></span>
                                                                                                </label>
                                                                                                <input type="text" name="roomType[]" placeholder="Enter the room type" class="col-md-8 input-text" />
                                                                                            </p>--}}

                                                                                        <p>
                                                                                            <label class="custom-checkbox custom-control">
                                                                                                <span class="custom-control-description">Please specify if you have any other room type by clicking on the Add button</span>
                                                                                            </label><br>
                                                                                        </p>
                                                                                            <button type="button" id="add" class="vk-btn vk-btn-m  vk-btn-default "><i class="fa fa-plus"></i></button>

                                                                                    </div>

                                                                                   {{-- <div class="form-group">

                                                                                            <div class="table-responsive">
                                                                                                <table class="table" id="dynamic_field">
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <label class="custom-checkbox custom-control">
                                                                                                                <input type="checkbox" autocomplete="off" class="custom-control-input" value="other">
                                                                                                                <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                                <span class="custom-control-description"></span>
                                                                                                            </label>
                                                                                                            <input type="text" name="roomType[]" placeholder="Enter the room type" class="input-text" />
                                                                                                        </td>
                                                                                                        <td><button type="button" name="add" id="add" class="vk-btn vk-btn-m  vk-btn-default vk-border-radius"><i class="fa fa-plus"></i></button></td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </div>

                                                                                    </div>--}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
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

@section('custom-script')

    {{--// Same floor yes or no trigger
    $('#r11').on('click', function(){
    $(this).parent().find('a').trigger('click')
    });

    $('#r12').on('click', function(){
    $(this).parent().find('a').trigger('click')
    });--}}


    {{--//Dynamically Add or Remove input fields in PHP with JQuery--}}
    $(document).ready(function(){
    var i=1;
    $('#add').click(function(){
    i++;
    $('#dynamic_field').append('<div id="row'+i+'">' +
        '<p class="col-sm-5 form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field">' +
        '<label class="" for="'+i+'">'+'Room Type' +
            '</label>'+''+
        '<input type="text" name="roomType[roomType][]" placeholder="Room type" class=" input-text " value="" required/>' + '</p>' +
        '<p class="col-sm-3 form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field">' +
        '<label class="" for="'+i+'">'+'Price per bed' +
            '</label>'+''+
        '<input type="text" name="roomType[price][]" placeholder="Price" class=" input-text" value="" required/>' + '</p>' +
        '<p class="col-sm-3 form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field">'  +
        '<label class="" for="'+i+'">' +'Number of bed(s) in the room'+
        '</label>'+''+
        '<input type="number" min="1" name="roomType[beds][]" placeholder="Number of bed(s)" class="input-text" value="" required/>' + '</p>' + '<p class="col-sm-1">'  +
        '<button type="button" name="remove" id="'+i+'" class="vk-btn vk-btn-m vk-btn-default btn_remove"><i class="fa fa-remove"></i></button></p></div>');
    });


    $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id");
    $('#row'+button_id+'').remove();
    });

   {{-- $('#submit').click(function(){
    $.ajax({
    url:"name.php",
    method:"POST",
    data:$('#add_name').serialize(),
    success:function(data)
    {
    alert(data);
    $('#add_name')[0].reset();
    }
    });
    });--}}



        {{--$('#oneInRoom').change(function(){
            if($('#oneInRoom').is(':checked')) {
                $(this).append('<input type="hidden" id="bed1" name="roomType[beds][]" value="1">' +
                    '<input type="number" class="input-text" id="price1" name="roomType[price][]">');
            }else {
                $('#bed1').remove();
                $('#price1').remove();
            }
        });$('#twoInRoom').change(function(){
            if($('#twoInRoom').is(':checked')) {
                $(this).append('<input type="hidden" id="bed2" name="roomType[beds][]" value="2">' +
                    '<input type="number" class="input-text" id="price2" name="roomType[price][]">');
            }else {
                $('#bed2').remove();
                $('#price2').remove();
            }
        });$('#threeInRoom').change(function(){
            if($('#threeInRoom').is(':checked')) {
                $(this).append('<input type="hidden" id="bed3" name="roomType[beds][]" value="3">' +
                    '<input type="number" class="input-text" id="price2" name="roomType[price][]">');
            }else {
                $('#bed3').remove();
                $('#price3').remove();
            }
        });--}}
    });

@endsection
