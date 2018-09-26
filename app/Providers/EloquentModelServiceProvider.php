<?php

namespace myRoommie\Providers;


use myRoommie\Hosteller;
use myRoommie\User;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Observers\UserObserver;
use myRoommie\Observers\HostelObserver;
use Illuminate\Support\ServiceProvider;
use myRoommie\Modules\Booking\Reservation;
use myRoommie\Observers\ReservationObserver;
use myRoommie\Observers\HostellerObserver;



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
