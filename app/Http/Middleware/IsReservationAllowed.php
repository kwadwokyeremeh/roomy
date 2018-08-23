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
        $hostel =Hostel::where('slug',$request->hostelName)
            ->with('reservationDate')->first();
        $reservationDate =$hostel->reservationDate;


        if (isset($reservationDate->reservation_start_date)==true){
            $startDate = strtotime($reservationDate->reservation_start_date);
            $endDate = strtotime($reservationDate->reservation_end_date);
        }else{

            $startDate = strtotime('14 February'.Carbon::now()->year);
            $endDate =strtotime('16 October'.Carbon::now()->year);
        }


        if (strtotime(now()) > $startDate && strtotime(now()) < $endDate){

            return $next($request);

        }

        return redirect(route('home'))->withErrors('Reservations for this hostel is closed');
    }
}
