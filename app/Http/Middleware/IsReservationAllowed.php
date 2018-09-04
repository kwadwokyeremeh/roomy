<?php

namespace myRoommie\Http\Middleware;

use Carbon\Carbon;
use Closure;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Modules\Hostel\ReservationDate;

class IsReservationAllowed
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
        $hostel =Hostel::whereSlug($request->hostelName)
            ->with('reservationDate')->first();


        $a =$hostel->retrieveReservationDateRange();

        if (strtotime(now()) > $a['startDate'] && strtotime(now()) < $a['endDate']){

            return $next($request);

        }

        return abort(423)->withErrors('Reservations for this hostel is closed');
    }
}
