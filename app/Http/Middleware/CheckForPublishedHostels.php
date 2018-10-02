<?php

namespace myRoommie\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use myRoommie\Modules\Hostel\Hostel;

class CheckForPublishedHostels
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (App::environment() =='local'){
            $publish = false;
        }else{
            $publish = true;
        }

        $count = Hostel::whereSlug($request->hostelName)->wherePublished($publish)->count();

        if ($count !== 0){

            return $next($request);
        }
        return abort(404);
    }

}
