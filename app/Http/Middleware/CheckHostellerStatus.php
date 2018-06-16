<?php

namespace myRoommie\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use myRoommie\Hosteller;

class CheckHostellerStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param   $status
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*if ($request->user()->hasStatus($ == false ){
            return redirect()->intended(route('hostel.registration'));
        }*/

        if ((Auth::guard('hosteller')->user()->status == false)){

            return redirect()->intended(route('hostel.registration'));
        }
        return $next($request);
    }
}