<?php

namespace myRoommie\Listeners\Hostel;

use myRoommie\Events\Hostel\HostelSaved;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use myRoommie\Repository\GoogleMaps;

class HostelSavedListener implements ShouldQueue
{
    public $queue = 'default';
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  HostelSaved  $event
     * @return void
     */
    public function handle(HostelSaved $event)
    {
        $coordinates =GoogleMaps::geocodeAddress( $event->hostel->name,$event->hostel->street_address, $event->hostel->city, $event->hostel->region,$event->hostel->country );



        $event->hostel->update([
            'latitude' => $coordinates['lat'],
            'longitude' => $coordinates['lng'],
        ]);
    }
}
