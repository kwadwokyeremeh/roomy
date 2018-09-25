<?php

namespace myRoommie\Observers;

use Illuminate\Support\Facades\Notification;
use myRoommie\Modules\Booking\Reservation;
use myRoommie\Notifications\UserReservationNotification;

class ReservationObserver
{
    /**
     * Handle the reservation "created" event.
     *
     * @param  \myRoommie\Modules\Booking\Reservation  $reservation
     * @return void
     */
    public function created(Reservation $reservation)
    {
        $reservation->user->notify(new UserReservationNotification($reservation));

    }

    /**
     * Handle the reservation "updated" event.
     *
     * @param  \myRoommie\Modules\Booking\Reservation  $reservation
     * @return void
     */
    public function updated(Reservation $reservation)
    {
        //
    }

    /**
     * Handle the reservation "deleted" event.
     *
     * @param  \myRoommie\Modules\Booking\Reservation  $reservation
     * @return void
     */
    public function deleted(Reservation $reservation)
    {
        //
    }

    /**
     * Handle the reservation "restored" event.
     *
     * @param  \myRoommie\Modules\Booking\Reservation  $reservation
     * @return void
     */
    public function restored(Reservation $reservation)
    {
        //
    }

    /**
     * Handle the reservation "force deleted" event.
     *
     * @param  \myRoommie\Modules\Booking\Reservation  $reservation
     * @return void
     */
    public function forceDeleted(Reservation $reservation)
    {
        //
    }
}
