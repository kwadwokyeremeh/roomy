<?php

namespace myRoommie\Providers;

use Illuminate\Support\ServiceProvider;
use myRoommie\Http\Controllers\HostelRegistrationController;
use myRoommie\Wizard\Steps\HostelRegistration\AddMediaStep;
use myRoommie\Modules\Hostel\Hostel;
use Illuminate\Support\Facades\DB;

class AddMediaServiceProvider extends ServiceProvider
{

    protected $defer;
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->when(AddMediaStep::class)
            ->needs($customs)
            ->give(function (Hostel $hostel)
            {
                /*
                 * This return the an array of names of room Types belonging to a hostel
                 *  @return array
                 * var$ getRoomTypeNameForImages
                 * */

                $id = $hostel->id;
                $custom = DB::table('room_descriptions')
                    ->select('room_type')
                    ->join('hostel_registrations', function ($join) {
                        $join->on('room_descriptions.hostel_id', '=', 'hostel_registrations.hostel_id')
                            ->when($id, function ($query, $id) {
                                return $query->where('hostel_registration.hostel_id', $id);
                            });

                    })
                    ->get();
            }
            );
    }
}
