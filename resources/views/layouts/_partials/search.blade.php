<div class="vk-booking-center-logo hidden-xs">
    <div class="container">
        <form action="{{route('search')}}" method="get" class="form-horizontal  booking-hotel-all">
            @csrf
            <ul>
                <li>
                    <h4>Hostel</h4>
                    <div class="input-group">
                        <label for="hostels"></label>
                        <input name="hostelName" class="form-control" type="text" id="hostels">
                        <span class="input-group-addon btn"><span class="fa fa-building"></span></span>
                    </div>
                </li>
                <li>
                    <h4>Location</h4>
                    <div class="input-group">
                        <label for="location"></label>
                        <input name="location" class="form-control" type="text" id="location">
                        <span class="input-group-addon btn"><span class="fa fa-map-pin"></span></span>
                    </div>
                </li>
                <li>
                    <h4>Price Filter</h4>
                    <div class="wrap-select">
                        <div class="slider">
                            <div id="slider-range" class="ui-slider-range"></div>
                            <span style="margin-right: 0; padding-right: 0">
                                                        <label class="label-filter-price-1">
                                                            <input type="text" id="amount" name="price">
                                                        </label>
                                                   </span>
                        </div>
                    </div>
                </li>
                <li>
                    <h4>Type of Room</h4>
                    <div class="wrap-select" style="margin-bottom: auto">
                        <div id="dda">
                                                    <span style="margin-right: 0; padding-right: 0">
                                                        <label class="label-filter-price-1">
                                                            <input type="text" id="amoun" name="roomType">
                                                        </label>
                                                   </span>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="vk-btn-check">
                        <button type="submit" class="btn vk-btn-primary btn-block btn-check">Advanced Search</button>
                    </div>
                </li>
            </ul>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
