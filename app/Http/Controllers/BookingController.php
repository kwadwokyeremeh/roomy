<?php

namespace myRoommie\Http\Controllers;

use Illuminate\Http\Request;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Modules\Hostel\Booking;
use myRoommie\Modules\Hostel\RoomDescription;


class BookingController extends Controller
{
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
            ->with(['blocks','floors','rooms','beds'])
            ->firstOrFail();
        $roonType = RoomDescription::where('room_token',$room_token)
            ->firstOrFail();
        return dd($room_token);

    }
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
     * @param  \myRoommie\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \myRoommie\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \myRoommie\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \myRoommie\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
