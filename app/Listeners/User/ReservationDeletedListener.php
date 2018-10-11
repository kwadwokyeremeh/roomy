<?php

namespace myRoommie\Listeners\User;

use Illuminate\Support\Facades\Notification;
use myRoommie\Events\UserReservationDeleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use myRoommie\Notifications\UserDeleteReservationNotification;

class ReservationDeletedListener
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  UserReservationDeleted  $event
     * @return void
     */
    public function handle(UserReservationDeleted $event)
    {
        $unReservedBed = $event->unReservedBed;
        $reason = $event->reason;
        Notification::send($event->unReservedBed->user, new UserDeleteReservationNotification($unReservedBed,$reason));
    }
}
