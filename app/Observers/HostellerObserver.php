<?php

namespace myRoommie\Observers;

use myRoommie\Hosteller;
use myRoommie\Notifications\HostellerCreatedNotification;

class HostellerObserver
{
    /**
     * Handle the hosteller "created" event.
     *
     * @param  \myRoommie\Hosteller  $hosteller
     * @return void
     */
    public function created(Hosteller $hosteller)
    {

        /*$message = (new HostellerCreatedNotification($hosteller))
            ->onQueue('emails');


        Mail::to($hosteller)
            ->queue($message);*/
    }

    public function saved(Hosteller $hosteller)
    {

    }
    /**
     * Handle the hosteller "updated" event.
     *
     * @param  \myRoommie\Hosteller  $hosteller
     * @return void
     */
    public function updated(Hosteller $hosteller)
    {
        //
    }

    /**
     * Handle the hosteller "deleted" event.
     *
     * @param  \myRoommie\Hosteller  $hosteller
     * @return void
     */
    public function deleted(Hosteller $hosteller)
    {
        //
    }

    /**
     * Handle the hosteller "restored" event.
     *
     * @param  \myRoommie\Hosteller  $hosteller
     * @return void
     */
    public function restored(Hosteller $hosteller)
    {
        //
    }

    /**
     * Handle the hosteller "force deleted" event.
     *
     * @param  \myRoommie\Hosteller  $hosteller
     * @return void
     */
    public function forceDeleted(Hosteller $hosteller)
    {
        //
    }



}
