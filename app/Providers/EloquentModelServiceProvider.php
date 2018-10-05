<?php

namespace myRoommie\Providers;


use myRoommie\Hosteller;

use myRoommie\Modules\Hostel\Room;
use myRoommie\Observers\RoomObserver;
use myRoommie\User;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;
use myRoommie\Observers\HostelObserver;
use myRoommie\Observers\HostellerObserver;
use myRoommie\Modules\Booking\Reservation;
use myRoommie\Observers\ReservationObserver;
use myRoommie\Modules\Hostel\HostellerHostel;
use myRoommie\Observers\HostellerHostelObserver;



class EloquentModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        User::observe(UserObserver::class);
        Reservation::observe(ReservationObserver::class);
        Hostel::observe(HostelObserver::class);
        Hosteller::observe(HostellerObserver::class);
        HostellerHostel::observe(HostellerHostelObserver::class);
        Room::observe(RoomObserver::class);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
