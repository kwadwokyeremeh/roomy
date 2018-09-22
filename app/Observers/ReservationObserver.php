<?php

namespace myRoommie\Observers;

use myRoommie\Modules\Booking\Reservation;

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
        dd($reservation->user,$reservation->hostel->hosteller,$reservation->hostel,$reservation->room(), $reservation->room);
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
