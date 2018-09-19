<?php

namespace myRoommie\Jobs;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Repository\GoogleMaps;

class GenerateMap implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $hostel;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 5;

    /**
     * The number of seconds the job can run before timing out.
     *
     * @var int
     */
    public $timeout = 150;
    /**
     * Create a new job instance.
     * @param Hostel $hostel
     *
     * @return void
     */
    public function __construct(Hostel $hostel)
    {
        $this->hostel=$hostel;
    }

    /**
     * Execute the job.
     *
     * @param Request $request
     * @param  Hostel $hostel
     * @return void
     */
    public function handle(Request $request, Hostel $hostel)
    {
        /*
        Get the Latitude and Longitude returned from the Google Maps Address.
      */
        $coordinates =GoogleMaps::geocodeAddress( $request->get('name'),$request->get('street_address'), $request->get('city'), $request->get('region'),$request->get('country') );


        $hostel->update([
            'latitude' => $coordinates['lat'],
            'longitude' => $coordinates['lng'],
            ]);

    }

    public function failed(\Exception $exception)
    {
        // Send user notification of failure, etc...
    }

}
