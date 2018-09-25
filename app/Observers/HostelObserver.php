<?php

namespace myRoommie\Observers;

use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Repository\GoogleMaps;

class HostelObserver
{
    /**
     * Handle the hostel "created" event.
     *
     * @param  \myRoommie\Modules\Hostel\Hostel  $hostel
     * @return void
     */
    public function created(Hostel $hostel)
    {
       //
    }

    /**
     * Handle the hostel "updated" event.
     *
     * @param  \myRoommie\Modules\Hostel\Hostel  $hostel
     * @return void
     */
    public function updated(Hostel $hostel)
    {
        //
    }

    /**
     * Handle the hostel "deleted" event.
     *
     * @param  \myRoommie\Modules\Hostel\Hostel  $hostel
     * @return void
     */
    public function deleted(Hostel $hostel)
    {
        //
    }

    /**
     * Handle the hostel "restored" event.
     *
     * @param  \myRoommie\Modules\Hostel\Hostel  $hostel
     * @return void
     */
    public function restored(Hostel $hostel)
    {
        //
    }

    /**
     * Handle the hostel "force deleted" event.
     *
     * @param  \myRoommie\Modules\Hostel\Hostel  $hostel
     * @return void
     */
    public function forceDeleted(Hostel $hostel)
    {
        //
    }
}
