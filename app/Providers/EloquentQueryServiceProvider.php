<?php

namespace myRoommie\Providers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class EloquentQueryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         *  Listen for  all database queries and log them
         * */

        DB::listen(function ($query){
            $query->sql;
                $query->bindings;
                    $query->time;
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
