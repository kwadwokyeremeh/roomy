<?php

namespace myRoommie\Providers;

use myRoommie\User;
use myRoommie\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;
use myRoommie\Modules\Booking\Reservation;
use myRoommie\Observers\ReservationObserver;



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
