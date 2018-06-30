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
                            <a href="javascript:void(0);" style="font-size: 0.55em">1.Basic Info</a>
                        </li>
                        <li class="active">
                            <a href="javascript:void(0);" style="font-size: 0.55em"><small>2.Hostel Details</small></a>
                            <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li class="make-a-reservation">
                            <a href="javascript:void(0);" style="font-size: 0.55em">3.Add media</a>
                            <span class="round-tabs five">
                              <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li class="confirmation">
                            <a href="javascript:void(0);" style="font-size: 0.55em">4.Amenities</a>
                            <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" style="font-size: 0.55em"><small>5.Layout and Pricing</small></a>
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
                                                                        <h3>Add amenities</h3>
                                                                        <h4>Now let us know the facilities you have available in your hostel</h4>
                                                                        <h3>General Facilities</h3>
                                                                        <div class="row">

                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="general[]" autocomplete="off" class="custom-control-input" value="Backup Plant">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Backup plant</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="general[]" autocomplete="off" class="custom-control-input" value="Parking Space">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Parking Space</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="general[]" autocomplete="off" class="custom-control-input" value="Library">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Library</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="general[]" autocomplete="off" class="custom-control-input" value="Swimming pool">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Swimming pool</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="general[]" autocomplete="off" class="custom-control-input" value="Air conditioned rooms">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Air conditioned rooms</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="general[]" autocomplete="off" class="custom-control-input" value="TV/Common rooms">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">TV/Common rooms</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="general[]" autocomplete="off" class="custom-control-input" value="Study rooms">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Study rooms</span>
                                                                                </label><br>
                                                                            </p><!----><!---->

                                                                            <div class="woocommerce-billing-fields__field-wrapper col-md-6">

                                                                                    <div class="table-responsive">
                                                                                        <table class="table" id="general">
                                                                                            <tr>
                                                                                                    {{--<!--<label class="custom-checkbox custom-control">
                                                                                                        <input type="checkbox" autocomplete="off" class="custom-control-input" value="other">
                                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>


                                                                                                    </label>-->
                                                                                                    {{ $errors->has('general[]') ? ' is-invalid' : '' }}" value="{{ old('general') }}
                                                                                                    --}}
                                                                                                    <span class="custom-control-description">Please add any other</span>

                                                                                                <td><button type="button" id="add_general" class="vk-btn vk-btn-m  vk-btn-default"><i class="fa fa-plus"></i></button></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>

                                                                            </div>
                                                                            @if ($errors->has('general[]'))
                                                                                <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('general[]') }}</strong>
                                                                                    </span>
                                                                            @endif
                                                                        </div>
                                                                        <h3>Services</h3>
                                                                        <div class="row">
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="services[]" autocomplete="off" class="custom-control-input" value="Daily housekeeping">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Daily housekeeping</span>
                                                                                </label><br>
                                                                            </p>
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="services[]" autocomplete="off" class="custom-control-input" value="WiFi Access">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">WiFi Access</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="services[]" autocomplete="off" class="custom-control-input" value="24 hour reception/portal">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">24 hour reception/portal</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="services[]" autocomplete="off" class="custom-control-input" value="DsTV subscription">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">DsTV subscription</span>
                                                                                </label><br>
                                                                            </p>
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="services[]" autocomplete="off" class="custom-control-input" value="24 hour security">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">24 hour security</span>
                                                                                </label><br>
                                                                            </p><!----><!---->

                                                                            <div class="woocommerce-billing-fields__field-wrapper col-md-6">

                                                                                    <div class="table-responsive">
                                                                                        <table class="table" id="services">
                                                                                            <tr>
                                                                                                    {{--<!--<label class="custom-checkbox custom-control">
                                                                                                        <input type="checkbox" autocomplete="off" class="custom-control-input" value="other">
                                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>


                                                                                                    </label>-->--}}
                                                                                                    <span class="custom-control-description">Please add any other services provided</span>

                                                                                                <td><button type="button" id="add_services" class="vk-btn vk-btn-m  vk-btn-default"><i class="fa fa-plus"></i></button></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>

                                                                            </div>
                                                                            @if ($errors->has('services[]'))
                                                                                <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('services[]') }}</strong>
                                                                                    </span>
                                                                            @endif
                                                                        </div>
                                                                        <h3>Food and Drink</h3>
                                                                        <div class="row">
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="food[]" autocomplete="off" class="custom-control-input" value="Restaurant">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Restaurant</span>
                                                                                </label><br>
                                                                            </p><p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="food[]" autocomplete="off" class="custom-control-input" value="Bar">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Bar</span>
                                                                                </label><br>
                                                                            </p>
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="food[]" autocomplete="off" class="custom-control-input" value="Catering Services">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Catering Services</span>
                                                                                </label><br>
                                                                            </p><!----><!---->

                                                                            <div class="woocommerce-billing-fields__field-wrapper col-md-6">

                                                                                    <div class="table-responsive">
                                                                                        <table class="table" id="food">
                                                                                            <tr>
                                                                                                    {{--<!--<label class="custom-checkbox custom-control">
                                                                                                        <input type="checkbox" autocomplete="off" class="custom-control-input" value="other">
                                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                        <span class="custom-control-description">Please specify any other</span>
                                                                                                        <input type="text" name="name[]" placeholder="Please specify any other" class="form-control name_list" />
                                                                                                    </label>-->--}}
                                                                                                    <span class="custom-control-description">Please specify any other catering services provided</span>

                                                                                                <td><button type="button" id="add_food" class="vk-btn vk-btn-m  vk-btn-default"><i class="fa fa-plus"></i></button></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>

                                                                            </div>
                                                                            @if ($errors->has('food[]'))
                                                                                <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('food[]') }}</strong>
                                                                                    </span>
                                                                            @endif
                                                                        </div>
                                                                        <h3>Entertainment</h3>
                                                                        <div class="row">
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="entertainment[]" autocomplete="off" class="custom-control-input" value="Board Games">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Board Games</span>
                                                                                </label><br>
                                                                            </p><!----><!---->

                                                                            <div class="woocommerce-billing-fields__field-wrapper col-md-6">

                                                                                    <div class="table-responsive">
                                                                                        <table class="table" id="entertainment">
                                                                                            <tr>
                                                                                                    {{--<!--<label class="custom-checkbox custom-control">
                                                                                                        <input type="checkbox" autocomplete="off" class="custom-control-input" value="other">
                                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                        <span class="custom-control-description">Please specify any other</span>
                                                                                                        <input type="text" name="name[]" placeholder="Please specify any other" class="form-control name_list" />
                                                                                                    </label>-->--}}
                                                                                                    <span class="custom-control-description">Please specify any other entertainment provided</span>

                                                                                                <td><button type="button" id="add_entertainment" class="vk-btn vk-btn-m  vk-btn-default"><i class="fa fa-plus"></i></button></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>

                                                                            </div>
                                                                            @if ($errors->has('entertainment[]'))
                                                                                <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('entertainment[]') }}</strong>
                                                                                    </span>
                                                                            @endif
                                                                        </div>
                                                                        <h3>Utilities</h3>
                                                                        <div class="row">
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="utilities[]" autocomplete="off" class="custom-control-input" value="Monthly fuel(gas) refill">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">Monthly fuel(gas) refill</span>
                                                                                </label><br>
                                                                            </p>
                                                                            <p class="col-md-6">
                                                                                <label class="custom-checkbox custom-control">
                                                                                    <input type="checkbox" name="utilities[]" autocomplete="off" class="custom-control-input" value="ECG credit(once in a year)">
                                                                                    <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                    <span class="custom-control-description">ECG credit(once in a year)</span>
                                                                                </label><br>
                                                                            </p><!----><!---->

                                                                            <div class="woocommerce-billing-fields__field-wrapper col-md-6">
                                                                                <span class="custom-control-description">Please specify any other utilities provided</span>
                                                                                    <div class="table-responsive">
                                                                                        <table class="table" id="utilities">
                                                                                            <tr>

                                                                                                    {{--<!--<label class="custom-checkbox custom-control">
                                                                                                        <input type="checkbox" autocomplete="off" class="custom-control-input" value="other">
                                                                                                        <span aria-hidden="true" class="custom-control-indicator"></span>
                                                                                                        <span class="custom-control-description">Please specify any other</span>
                                                                                                        <input type="text" name="name[]" placeholder="Please specify any other" class="form-control name_list" />
                                                                                                    </label>-->--}}

                                                                                                <td><button type="button" id="add_utilities" class="vk-btn vk-btn-m  vk-btn-default"><i class="fa fa-plus"></i></button></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>

                                                                            </div>
                                                                            @if ($errors->has('utilities[]'))
                                                                                <span class="invalid-feedback">
                                                                                        <strong style="color: #ff0000;">{{ $errors->first('utilities[]') }}</strong>
                                                                                    </span>
                                                                            @endif
                                                                        </div>
                                                                        @include('hostelRegistration._partials.wizardControl')
                                                                    </form>
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


@section('custom-script')

    {{--//Dynamically Add or Remove input fields in PHP with JQuery--}}
    $(document).ready(function(){
    var i=1;

    $('#add_general').click(function(){
    i++;
    $('#general').prepend('<tr class="form-row form-row-last" id="row'+i+'">'+
        '<td>' + '<label class="" for="general'+ i+'">'+
                '<input type="text" name="general[]" placeholder="Add any other facilities" class="input-text" required />' +'</label>'+ '</td>' + '' + '' + '<td>' +
            '<button type="button" name="remove" id="'+i+'" class="vk-btn vk-btn-m  vk-btn-default btn_remove"><i class="fa fa-remove"></i></button></td></tr>'+
    '');
    });




    // Services add on

    $('#add_services').click(function(){
    i++;
    $('#services').prepend('<tr class="form-row form-row-last" id="row'+i+'">' +
        '<td>' + '<label class="">' +
                ''+''+
                '<input type="text" name="services[]" placeholder="Add any other services provided" class="input-text" required />' +'</label>'+ '</td>' + '' + '' + '<td>' +
            '<button type="button" name="remove" id="'+i+'" class="vk-btn vk-btn-m  vk-btn-default btn_remove"><i class="fa fa-remove"></i></button></td></tr>');
    });


    // Food and Drinks add on
    $('#add_food').click(function(){
    i++;
    $('#food').prepend('<tr class="form-row form-row-last" id="row'+i+'">' +
        '<td>' + '<label class="">'+
                ''+''+
                '<input type="text" name="food[]" placeholder="Add any Catering services provided" class="input-text" required />' +'</label>'+ '</td>' + '' + '' + '<td>' +
            '<button type="button" name="remove" id="'+i+'" class="vk-btn vk-btn-m  vk-btn-default btn_remove"><i class="fa fa-remove"></i></button></td></tr>');
    });


   // Entertainment add on

    $('#add_entertainment').click(function(){
    i++;
    $('#entertainment').prepend('<tr class="form-row form-row-last" id="row'+i+'">' +
        '<td>' + '<label class="">' +
                ''+''+
                '<input type="text" name="entertainment[]" placeholder="Add any other entertainment facilities" class="input-text" required />' +'</label>'+ '</td>' + '' + '' + '<td>' +
            '<button type="button" name="remove" id="'+i+'" class="vk-btn vk-btn-m  vk-btn-default btn_remove"><i class="fa fa-remove"></i></button></td></tr>');
    });






    // Utilities add on
    $('#add_utilities').click(function(){
    i++;
    $('#utilities').prepend('<tr class="form-row form-row-last" id="row'+i+'">' +
        '<td>' + '<label class="">'+
                ''+''+
                '<input type="text" name="utilities[]" placeholder="Add any other utilities provided" class="input-text" required />' +'</label>'+ '</td>' + '' + '' + '<td>' +
            '<button type="button" name="remove" id="'+i+'" class="vk-btn vk-btn-m  vk-btn-default btn_remove"><i class="fa fa-remove"></i></button></td></tr>');
    });



    {{--$('#submit').click(function(){
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

    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id");
        $('#row'+button_id+'').remove();
    });
    });


@endsection
