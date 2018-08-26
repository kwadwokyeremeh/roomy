<?php

namespace myRoommie\Http\Controllers\Booking;


use myRoommie\Modules\Booking\Reservation;
use Illuminate\Http\Request;
use myRoommie\Modules\Hostel\Room;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Http\Controllers\Controller;
use myRoommie\Modules\Hostel\RoomDescription;
use myRoommie\Http\Middleware\IsReservationAllowed;
use Validator;

class ReservationController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth',IsReservationAllowed::class]);

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
     * @param   Reservation $reservation
     * @return \Illuminate\Http\Response
     */
    public function index($hostelName, Reservation $reservation)
    {
        $hostel =Hostel::where('id', $hostelName)
            ->orWhere('slug', $hostelName)
            ->with(['blocks','floors','rooms','beds','roomDescription'])
            ->firstOrFail();
        $blocks = $hostel->blocks;
        $floors = $hostel->floors;
        $rooms = $hostel->rooms;
        $beds = $hostel->beds;
        return view('individualHostel.booking.03_selectRoom',compact('hostel','roomType','blocks','floors','rooms','beds','reservation'));
    }


    public function roomTypeReservation($hostelName,$room_token, Reservation $reservation)
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
        return view('individualHostel.booking.03_selectRoom',compact('hostel','roomType','blocks','floors','rooms','beds','reservation'));

    }

    /*
     * @param \Illuminate\Http\Request
     * @param  Hostel $hostelName $room_token
     * @return \Illuminate\Http\Response
     *
     * */
    public function saveProgress($hostelName, $room_token, Request $request)
    {

        $this->validate($request,[
            'selectedRoom' => ['numeric','required',

                ]
                ],
            ['required' => 'Please select a room']);
        $v = Validator::make($request->all(),
            ['selectedRoom' => ['numeric','required',]],
            ['required' => 'Please select a room']);

        $v->after(function ($v){
                if ($this->isRoomFull(\request(['selectedRoom'])) == true){
                    $v->errors()->add('selectedRoom', 'Sorry the selected room is full');
                    }
        });

        if ($v->fails()) {
            return redirect($request->getRequestUri())
                        ->withErrors($v)
                        ->withInput();
        }


        $request->session()->put('selectedRoom',$request['selectedRoom']);
        \request()->session()->regenerate();
        $hostel =Hostel::where('id', $hostelName)
            ->orWhere('slug', $hostelName)
            ->with(['blocks','floors','rooms','beds','roomDescription'])
            ->firstOrFail();
        $roomSelected =Room::where('id',$request['selectedRoom'])->firstOrFail();



        $roomType = RoomDescription::where('room_token',$room_token)
            ->firstOrFail();
        return view('individualHostel.booking.04_payment',compact('hostel','room_token','roomSelected'));
    }


    /*public function selectRoom($hostelName)
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
    }*/

    public function isRoomFull($room)
    {
        $reservedBeds = Reservation::where('room_id',$room)->get();
        $roomDetails = Room::where('id',$room)->first();
        $rs = $roomDetails->roomDescription->number_of_beds;

        if (count($reservedBeds)<$rs){
            $isRoomFull = false;
        }elseif (count($reservedBeds)==$rs){
            $isRoomFull = true;
        }else{
            $isRoomFull =true;
        }

        return $isRoomFull;
    }
}
