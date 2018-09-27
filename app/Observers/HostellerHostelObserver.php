<?php

namespace myRoommie\Observers;

use myRoommie\Hosteller;
use myRoommie\Modules\Hostel\HostellerHostel;
use myRoommie\Notifications\HostellerHostelNotification;

class HostellerHostelObserver
{
    /**
     * Handle the hosteller hostel "created" event.
     *
     * @param  \myRoommie\Modules\Hostel\HostellerHostel  $hostellerHostel
     * @return void
     */
    public function created(HostellerHostel $hostellerHostel)
    {
        //dd($hostellerHostel);
        $message = (new HostellerHostelNotification($hostellerHostel))
            ->onQueue('emails');



    }

    /**
     * Handle the hosteller hostel "created" event.
     *
     * @param  \myRoommie\Modules\Hostel\HostellerHostel  $hostellerHostel
     * @return void
     */
    public function saved(HostellerHostel $hostellerHostel)
    {
        //dd($hostellerHostel);
        $message = (new HostellerHostelNotification($hostellerHostel))
            ->onQueue('emails');



    }

    /**
     * Handle the hosteller hostel "updated" event.
     *
     * @param  \myRoommie\Modules\Hostel\HostellerHostel  $hostellerHostel
     * @return void
     */
    public function updated(HostellerHostel $hostellerHostel)
    {

    }

    /**
     * Handle the hosteller hostel "deleted" event.
     *
     * @param  \myRoommie\Modules\Hostel\HostellerHostel  $hostellerHostel
     * @return void
     */
    public function deleted(HostellerHostel $hostellerHostel)
    {
        //
    }

    /**
     * Handle the hosteller hostel "restored" event.
     *
     * @param  \myRoommie\Modules\Hostel\HostellerHostel  $hostellerHostel
     * @return void
     */
    public function restored(HostellerHostel $hostellerHostel)
    {
        //
    }

    /**
     * Handle the hosteller hostel "force deleted" event.
     *
     * @param  \myRoommie\Modules\Hostel\HostellerHostel  $hostellerHostel
     * @return void
     */
    public function forceDeleted(HostellerHostel $hostellerHostel)
    {
        //
    }

    /*
     * pivotAttaching, pivotAttached
pivotDetaching, pivotDetached,
pivotUpdating, pivotUpdated
     *
     * */

    public function pivotAttached($model, $relationName, $pivotIds, $pivotIdsAttributes)
    {
        //dd($model,$relationName,$pivotIds,$pivotIdsAttributes);
    }

}
