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
                        <li>
                            <a href="javascript:void(0);">4.Amenities</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
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
                    @include('hostelRegistration._partials.progressBar')
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
                                                                <div class="woocommerce-billing-fields">

                                                                    <h3>Add images(views) of your hostel</h3>
                                                                    <div class="row">
                                                                        <form action="multiupload.php" method="post" enctype="multipart/form-data">
                                                                            <div class="col-md-9">
                                                                                <input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple/>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input type="submit" class="vk-btn vk-btn-m  vk-btn-default vk-border-radius" name='submit_image' value="Upload Images of hostel"/>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="row" id="image_preview"></div>

                                                                </div>
                                                                <div class="woocommerce-billing-fields">

                                                                    <h3>Images of room Type available in your hostel</h3>
                                                                    <h4>Add images(views) for one in a room</h4>
                                                                    <div class="row">
                                                                        <form action="multiupload.php" method="post" enctype="multipart/form-data">
                                                                            <div class="col-md-9">
                                                                                <input type="file" class="form-control" id="images1" name="images[]" onchange="preview_images1();" multiple/>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input type="submit" class="vk-btn vk-btn-m  vk-btn-default vk-border-radius" name='submit_image' value="Upload Images of the room"/>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="row" id="image_preview1"></div>

                                                                </div>
                                                                <div class="woocommerce-billing-fields">


                                                                    <h4>Add images(views) for two in a room</h4>
                                                                    <div class="row">
                                                                        <form action="multiupload.php" method="post" enctype="multipart/form-data">
                                                                            <div class="col-md-9">
                                                                                <input type="file" class="form-control" id="images3" name="images[]" onchange="preview_images3();" multiple/>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input type="submit" class="vk-btn vk-btn-m  vk-btn-default vk-border-radius" name='submit_image' value="Upload Images of the room"/>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="row" id="image_preview3"></div>

                                                                </div>
                                                                <div class="woocommerce-billing-fields">

                                                                    <h3>Add any other images of your hostel</h3>
                                                                    <div class="row">
                                                                        <form action="multiupload.php" method="post" enctype="multipart/form-data">
                                                                            <div class="col-md-9">
                                                                                <input type="file" class="form-control" id="images2" name="images[]" onchange="preview_images2();" multiple/>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input type="submit" class="vk-btn vk-btn-m  vk-btn-default vk-border-radius" name='submit_image' value="Upload any other images"/>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="row" id="image_preview2"></div>

                                                                </div>

                                                            </div>



                                                            @include('hostelRegistration._partials.wizardControl')
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
