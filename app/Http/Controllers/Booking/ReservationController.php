<?php

namespace myRoommie\Http\Controllers\Booking;


use function GuzzleHttp\headers_from_lines;
use myRoommie\Modules\Booking\Reservation;
use Illuminate\Http\Request;
use myRoommie\Modules\Hostel\Block;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Http\Controllers\Controller;
use myRoommie\Modules\Hostel\RoomDescription;

class ReservationController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \myRoommie\Modules\Booking\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \myRoommie\Modules\Booking\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \myRoommie\Modules\Booking\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \myRoommie\Modules\Booking\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }

    /**
     * Display a listing of the resource.
     * @param  Hostel $hostelName
     * @return \Illuminate\Http\Response
     */
    public function index($hostelName)
    {
        $hostel =Hostel::where('id', $hostelName)
            ->orWhere('slug', $hostelName)
            ->with(['blocks','floors','rooms','beds'])
            ->firstOrFail();
        return view('individualHostel.booking.index',compact('hostel'));
    }


    public function roomTypeReservation($hostelName,$room_token)
    {
        $hostel =Hostel::where('id', $hostelName)
            ->orWhere('slug', $hostelName)
            ->with(['blocks','floors','rooms','beds','roomDescription'])
            ->firstOrFail();
        $roomType = RoomDescription::where('room_token',$room_token)
            ->firstOrFail();

        $blocks = $hostel->blocks;
        $floors = $hostel->floors;
        $rooms = $hostel->rooms;
        $beds = $hostel->beds;




        //return compact('hostel','roomType','blocks','floors','rooms','beds');
        //return response()->json($rooms);
        //return response()->view('individualHostel.booking.03_selectRoom',compact('hostel','roomType','blocks','floors','rooms','beds'),200);
        return view('individualHostel.booking.03_selectRoom',compact('hostel','roomType','blocks','floors','rooms','beds'));

    }

    /*
     * @param  Hostel $hostelName $room_token
     * @return \Illuminate\Http\Response
     *
     * */
    public function saveProgress($hostelName, $room_token)
    {
        \request()->session()->regenerate();
        $hostel =Hostel::where('id', $hostelName)
            ->orWhere('slug', $hostelName)
            ->with(['blocks','floors','rooms','beds','roomDescription'])
            ->firstOrFail();
        $roomType = RoomDescription::where('room_token',$room_token)
            ->firstOrFail();
        return view('individualHostel.booking.04_payment',compact('hostel','room_token'));
    }





    public function selectRoom($hostelName)
    {
        $hostel = Hostel::where('id',$hostelName)
            ->orWhere('slug',$hostelName)
            ->firstOrFail();
        return view('individualHostel.booking.03_selectRoom',compact('hostel'));
    }

    public function makePayment($hostelName)
    {
        $hostel = Hostel::where('id',$hostelName)
            ->orWhere('slug',$hostelName)
            ->firstOrFail();
        return view('individualHostel.booking.04_payment',compact('hostel'));
    }

    public function confirmation($hostelName)
    {
        $hostel = Hostel::where('id',$hostelName)
            ->orWhere('slug',$hostelName)
            ->firstOrFail();
        return view('individualHostel.booking.05_confirmation',compact('hostel'));
    }
}
