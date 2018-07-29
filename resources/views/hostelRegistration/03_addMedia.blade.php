
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
                            <a href="#">Add media</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="vk-make-a-reservation-content">
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
                    {{--@include('hostelRegistration._partials.progressBar')--}}
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
                                                        <form action="{{ route('hostel.registration.submit', [$step::$slug]) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                        <div class="row">
                                                            <div class="vk-checkout-billing-left">
                                                                <div class="woocommerce-billing-fields">

                                                                    <h3>Add images(views) of your hostel</h3>
                                                                    <div>
                                                                        <p class="custom-checkbox custom-control">
                                                                            <span class="custom-control-description">
                                                                                The images must include the views of the hostel specifically, the hostel front view and the side views,
                                                                                &nbsp;
                                                                                Images must be at least 3
                                                                                You can select multiple images all at once
                                                                            </span>
                                                                        </p>
                                                                        <div class="row">

                                                                            <div class="col-md-3">
                                                                                Front View
                                                                                {{--Previewing of hostel views images--}}
                                                                                <div id="view1_preview">


                                                                                </div>
                                                                                <input type="file" accept="image/*" class="input-text" id="view1" name="images[views][front]" onchange="preview_views();" required/>
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                Side View
                                                                                {{--Previewing of hostel views images--}}
                                                                                <div class="row" id="view2_preview">


                                                                                </div>
                                                                                <input type="file" accept="image/*" class="input-text" id="view2" name="images[views][left]" onchange="preview_views();" required/>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                Other Side View
                                                                                {{--Previewing of hostel views images--}}
                                                                                <div class="row" id="view3_preview">


                                                                                </div>
                                                                                <input type="file" accept="image/*" class="input-text" id="view3" name="images[views][right]" onchange="preview_views();" required/>
                                                                            </div>
                                                                        </div>


                                                                        <br>
                                                                    </div>
                                                                    <h3>Short video of your hostel</h3>
                                                                    <div>
                                                                        <p class="custom-checkbox custom-control">
                                                                            <span class="custom-control-description">
                                                                                Upload short video of your hostel if you have any
                                                                            </span>
                                                                        </p>
                                                                        <input type="file" accept="video/*" class="input-text" id="video" name="video" onchange="video_preview();"/>
                                                                   {{--Previewing of hostel views images--}}
                                                                    <div class="row" id="video_preview">


                                                                    </div>
                                                                        <br>
                                                                    </div>



                                                                </div>
                                                                <div class="woocommerce-billing-fields">

                                                                    <h3>Images of room Type available in your hostel</h3>

                                                                @foreach($data->roomDescription as $roomType)

                                                                    <h3>Add images for {{$roomType->room_type}}</h3>

                                                                    <p>
                                                                        <label class="custom-checkbox custom-control">
                                                                            <span class="custom-control-description">Multiple images allowed</span>
                                                                        </label>
                                                                    </p>

                                                                    <div class="row">

                                                                            <div class="col-md-9">
                                                                                <input type="file" class="input-text" accept="image/*" id="room" name="images[room][{{$roomType->id}}][]" onchange="preview_images();" multiple required/>
                                                                            </div>

                                                                    </div>
                                                                    <div class="row" id="room_preview"></div>
                                                                @endforeach

                                                                    <br>

                                                                </div>

                                                                <div class="woocommerce-billing-fields">

                                                                    <h3>Add any other images of your hostel</h3>
                                                                    <p>
                                                                        <label class="custom-checkbox custom-control">
                                                                            <span class="custom-control-description">Please if you have any other images of your hostel, you can add it here. Multiple images allowed</span>
                                                                        </label>

                                                                    </p>
                                                                    <div class="row">


                                                                                <input type="file" class="input-text" accept="image/*" id="others" name="images[others][]" onchange="preview_others();" multiple/>


                                                                    </div>
                                                                    <div class="row" id="other_images">

                                                                    </div>

                                                                </div>

                                                            </div>
                                                            @if ($errors->any())
                                                                <div class="alert alert-danger">
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif


                                                            @include('hostelRegistration._partials.wizardControl')
                                                        </div>
                                                        </form>
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
        <script>
        function preview_views()
        {
        var total_file=document.getElementById("views").files.length;
        for(var i=0;i<total_file;i++)
        {
        $('#views_preview').prepend("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
        }

        function preview_others()
        {
        var total_file=document.getElementById("others").files.length;
        for(var i=0;i<total_file;i++)
        {
        $('#other_images').prepend("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
        }
        }
        function preview_images()
        {
        var total_file=document.getElementById("images").files.length;
        for(var i=0;i<total_file;i++)
        {
        $('#room_preview'+i +'').prepend("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
        }
        }
        function preview_images3()
        {
        var total_file=document.getElementById("images3").files.length;
        for(var i=0;i<total_file;i++)
        {
        $('#image_preview3').prepend("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
        }
        }

            function video_preview()
            {
                var total_file=document.getElementById("video").files.length;
                for(var i=0;i<total_file;i++)
                {
                    $('#video_preview').prepend("<iframe class='embed-responsive-4by3' src='"+URL.createObjectURL(event.target.files[i])+"'></iframe>");
                }
            }
    </script>

    @endsection

