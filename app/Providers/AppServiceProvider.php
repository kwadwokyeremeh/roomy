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
