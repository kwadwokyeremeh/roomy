<?php

namespace myRoommie\Http\Controllers;

use Illuminate\Http\Request;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Modules\Hostel\Booking;


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
            ->firstOrFail();
        return view('individualHostel.booking.index',compact('hostel'));
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
