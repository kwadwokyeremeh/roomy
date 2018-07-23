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
                        <a href="#">Instructions</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="vk-typography-body">
        <div class="container">
            <div class="vk-typography-right">
            <div class="vk-typography-text-align">
                <div class="vk-typography-text-align-item-center">
                    <h5>Instructions</h5>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                        egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet,
                        ante. Donec eu libero sit amet quam egestas semper.
                    </p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <form action="{{route('hostel.registration.submit',[$step::$slug])}}" method="post">
        @csrf
        <button class="vk-btn vk-btn-default" type="submit">Start Registration Process</button>
        <div class="vk-divider vk-divider-dotted vk-divider-double"></div>

    </form>

</section>
