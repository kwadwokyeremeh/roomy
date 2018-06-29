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
                            <a href="javascript:void(0);" style="font-size: 0.55em">5.Layout and Pricing</a>
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
                                                                                <input type="text" class="input-text {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}"  name="hostel_name" id="hostel_name" placeholder="Enter your hostel name" autocomplete="given-name" required autofocus>

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
                                                                        </div>

                                                                        <h3>Hostel Location</h3>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_hostel_location_field_detail" data-priority="20">
                                                                                <label for="street_address" class="">Street Address <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text " name="street_address" id="street_address" placeholder="Enter your hostel address" autocomplete="given-location" required>
                                                                                @if ($errors->has('street_address'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('street_address') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="billing_hostel_slang_field_detail" data-priority="20">
                                                                                <label for="city" class="">City <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text " name="city" id="city" placeholder="Enter City" >
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

                                                                        <h3>Information about the Rooms in your hostel</h3>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_total_number_of_blocks_field_detail" data-priority="20">
                                                                                <label for="total_number_of_blocks" class="">Total number of blocks <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="number" class="input-text " name="number_of_blocks" id="total_number_of_blocks" placeholder="Example; 3" value="" autocomplete="1">
                                                                                @if ($errors->has('number_of_blocks'))
                                                                                    <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('number_of_blocks') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="billing_total_number_of_rooms_field_detail" data-priority="20">
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
                                                                                                                <input type="number" class="input-text " name="number_of_rooms" id=number_of_rooms" placeholder="10" value="" >
                                                                                                            </p>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                </div>




                                                                            </div>
                                                                            <div role="group" class="form-group row">
                                                                                <h3 class="col-form-label">
                                                                                    Types of rooms available
                                                                                </h3>
                                                                                <div class="col-sm-12">
                                                                                    <p>
                                                                                        <label class="custom-checkbox custom-control">
                                                                                            <input type="checkbox" autocomplete="off" class="custom-control-input" name="roomType[]" value="1">
                                                                                            <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                            <span class="custom-control-description">One in a room with balcony and washroom</span>
                                                                                        </label><br>
                                                                                    </p>
                                                                                    <p>
                                                                                        <label class="custom-checkbox custom-control">
                                                                                            <input type="checkbox" autocomplete="off" class="custom-control-input" name="roomType[]" value="2">
                                                                                            <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                            <span class="custom-control-description">Two in a room with balcony and washroom</span>
                                                                                        </label><br>
                                                                                    </p>
                                                                                    <p>
                                                                                        <label class="custom-checkbox custom-control">
                                                                                            <input type="checkbox" autocomplete="off" class="custom-control-input" name="roomType[]" value="3">
                                                                                            <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                            <span class="custom-control-description">Three in a room with balcony and washroom</span>
                                                                                        </label><br>
                                                                                    </p><!----><!---->
                                                                                    <div class="woocommerce-billing-fields__field-wrapper" id="dynamic_field">

                                                                                            {{--<p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                                                                <label class="custom-checkbox custom-control">
                                                                                                    <input type="checkbox" autocomplete="off" class="col-md-1 custom-control-input" value="other">
                                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                    <span class="custom-control-description"></span>
                                                                                                </label>
                                                                                                <input type="text" name="roomType[]" placeholder="Enter the room type" class="col-md-8 input-text" />
                                                                                            </p>--}}
                                                                                            <button type="button" name="add" id="add" class="vk-btn vk-btn-m  vk-btn-default "><i class="fa fa-plus"></i></button>

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
    // Same floor yes or no trigger
    $('#r11').on('click', function(){
    $(this).parent().find('a').trigger('click')
    });

    $('#r12').on('click', function(){
    $(this).parent().find('a').trigger('click')
    });
    //Dynamically Add or Remove input fields in PHP with JQuery
    $(document).ready(function(){
    var i=1;
    $('#add').click(function(){
    i++;
    $('#dynamic_field').prepend('<p class="form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field" id="row'+i+'">' +
        '<label class="custom-checkbox custom-control">' +'<input type="checkbox" autocomplete="off" class="custom-control-input" value="other">'+
            '<span aria-hidden="true" class="custom-control-indicator">'+'</span></label>'+''+
        '<input type="text" name="roomType[]" placeholder="Enter the room type" class="col-md-8 input-text" />' +'<br>' + '' + ''  +
        '<button type="button" name="remove" id="'+i+'" class="vk-btn vk-btn-default btn_remove"><i class="fa fa-remove"></i></button></p>');
    });


    $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id");
    $('#row'+button_id+'').remove();
    });

    $('#submit').click(function(){
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
    });

    });

@endsection
