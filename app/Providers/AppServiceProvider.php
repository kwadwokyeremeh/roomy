<?php

namespace myRoommie\Providers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Validator::extend('uniqueManagerEmail', function ($attribute, $value, $parameters, $validator) {
            $count = DB::table('hostellers')->where('email', $value)
                /*->where('lastName', $parameters[0])*/
                ->count();

            return $count === 0;
        });

        Validator::extend('uniqueManagerPhone', function ($attribute, $value, $parameters, $validator) {
            $count = DB::table('hostellers')->where('phone', $value)
                /*->where('lastName', $parameters[0])*/
                ->count();

            return $count === 0;
        });

        Validator::extend('uniqueHostelName', function ($attribute, $value, $parameters, $validator) {
            $count = DB::table('hostels')->where('name', mb_strtolower($value))
                /*->where('lastName', $parameters[0])*/
                ->count();

            return $count === 0;
        });

        Validator::extend('uniqueSlug','myRoommie\Modules\Hostel\Hostel@uniqueSlug');


        Validator::extend('inconsistentData',function ($attribute, $value, $parameters, $validator){
            $blocks = \request(['block']);
            $unsortedFloors = \request(['floor']);
            $unsortedRooms = \request(['room']);
            [$fk,$floorValues]=array_divide($unsortedFloors);
            [$fk1,$rValues] = array_divide($unsortedRooms);
            if((count($blocks)==count($fk)) && (count($fk)==count($fk1))){
                return 'The provided data is consistent';
            }
                return 'The provided data is inconsistent.';
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
