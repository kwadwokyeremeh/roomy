<?php

namespace myRoommie\Http\Controllers\Booking;



use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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
    protected $reservation;


    public function __construct(Reservation $reservation)
    {
        $this->reservation =$reservation;
        $this->middleware(['auth:web,hosteller',IsReservationAllowed::class]);


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
        $hostel =Hostel::whereSlug($hostelName)
            //->orWhere('slug', $hostelName)
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

        $hostel =Hostel::whereSlug($hostelName)
            //->orWhere('slug', $hostelName)
            ->with(['blocks','floors','rooms','beds','roomDescription'])
            ->firstOrFail();
        if ($room_token=='booking'){
            $roomType = [];
        }else{
            $roomType = $hostel->roomDescription()->whereRoomToken($room_token)->firstOrFail();

        }

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
    public function saveProgress($hostelName, $room_token, Request $request, Reservation $reservation)
    {
        $hostel =Hostel::whereSlug($hostelName)
            //->orWhere('slug', $hostelName)
            ->with(['blocks','floors','rooms','beds','roomDescription','reservationDate'])
            ->firstOrFail();
        /*
         *  Checking if the route uri is booking or room token
         * */
        if ($room_token=='booking'){
            $roomType = [];
        }else{
            $roomType = $hostel->roomDescription()->whereRoomToken($room_token)->firstOrFail();

        }

        $this->validate($request,[
            'selectedRoom' => ['numeric','required',

                ]
                ],
            ['required' => 'Please select a room']);
        $v = Validator::make($request->all(),
            ['selectedRoom' => ['numeric','required',]],
            ['required' => 'Please select a room']);

        $v->after(function ($v){
                if ($this->reservation->isRoomFull(\request(['selectedRoom'])) == true){
                    $v->errors()->add('selectedRoom', 'Sorry the selected room is full');
                    }
                elseif ($this->reservation->userHasReservation()==true){
                    //Check if the user has paid for the reserved bed
                    if ($this->reservation->userHasMadePayment()== true){
                        //If yes, notify the user that he/she can't reserved another bed the year
                        $v->errors()->add('message','Sorry you can\'t reserved another bed till next academic year');
                    }else{

                        $v->errors()->add('modal', 'You have already made a reservation');
                    }



                }
        });

        if ($v->fails()) {

            return redirect($request->getRequestUri())
                        ->withErrors($v)

                        ->withInput();
        }



        /*
         *  Persist the data to the database
         *  @param \Illuminate\Http\Request $request
         * */
        $user =auth('web')->user();
        $request->session()->put('selectedRoom',$request['selectedRoom']);
        $roomSelected =$hostel->rooms()->where('id',$request['selectedRoom'])->firstOrFail();
        /*
         *  Check if the selected room is having a gender associated with it
         * */
        if ($roomSelected->sex_type == 'No Gender'){
            $roomSelected->update(['sex_type'=>auth('web')->user()->sex]);
        }


        $duration = $hostel->retrieveDuration();
        $price =$roomSelected->roomDescription->price;
        $data =[
            'token'             =>mb_strtoupper(uniqid()),
            'start_date'        =>now()->toDateTimeString(),
            'end_date'          =>$duration->toDateTimeString(),
            'amount_to_be_paid' =>$price,
            'status'            =>false,
            'hostel_id'         =>$hostel->id,
            'room_id'           =>$roomSelected->id,
            'user_id'           =>$user->id,

        ];
        if ($reservation->isRoomFull(\request(['selectedRoom'])) == true){
            return redirect($request->getRequestUri())
                ->withErrors($v)
                ->withInput();
        }else{
            //DB::transaction(function (){});
            $reservation->create($data);


        }



        \request()->session()->regenerate();
        /*
         * Retrieve hostel default reservation date
         * */




        session()->flash('message');
        return view('individualHostel.booking.04_payment',compact('hostel','room_token','roomSelected'))
            ->with(['messages'=>
                ['Your reservation has been successful, please proceed to make payment',
                    'Your reservation would expire in '. $duration->diffForHumans(). ' if you fail to make payment before then'
                ]]);




    }

    /*
     *
     *
     * */
    public function makePayment($hostelName)
    {

        $hostel = Hostel::whereSlug($hostelName)
            //->orWhere('slug',$hostelName)
            ->firstOrFail();
        return view('individualHostel.booking.04_payment',compact('hostel'));
    }


    /*public function selectRoom($hostelName)
    {
        $hostel = Hostel::where('id',$hostelName)
            ->orWhere('slug',$hostelName)
            ->firstOrFail();
        return view('individualHostel.booking.03_selectRoom',compact('hostel'));
    }

    public function confirmation($hostelName)
    {
        $hostel = Hostel::where('id',$hostelName)
            ->orWhere('slug',$hostelName)
            ->firstOrFail();
        return view('individualHostel.booking.05_confirmation',compact('hostel'));
    }*/



    /*
     * Un-reserve a user reservation
     * Same as edit a reservation
     * */
    public function unReserveBed($hostelName, Reservation $reservation)
    {

    $hostel = Hostel::findHostel($hostelName);
    $unReserveBed = $this->reservation->whereUserId(auth('web')->id())->firstOrFail();
    //Count if the number of occupants in the room is zero, unset the room gender
        $room =$unReserveBed['room_id'];
        $unReserveBed->forceDelete();
        $count = $this->reservation->whereRoomId($room)->count();
        if ($count == 0){
            $hostel->rooms()->whereId($room)->update(['sex_type'=>null]);
        }


    session()->flash('unreserve','You bed have been successfully unreserved, Select a room to proceed');
    return redirect()->back();
        //view('individualHostel.booking.03_selectRoom',compact('hostel','reservation'));

    }


    /*
     * Redirect user to his/her previous reservation process
     * */
    protected $userReservation;
    public function previousReservation($hostelName,$room_token,Reservation $reservation)
    {

        $userReservation =$this->reservation->whereUserId(auth('web')->id())->latest()->firstOrFail();
        $hostel =Hostel::whereId($userReservation['hostel_id'])->firstOrFail();

        $roomSelected =$hostel->rooms()->where('id',$userReservation['room_id'])->firstOrFail();
        session()->flash('message');
        return view('individualHostel.booking.04_payment',compact('hostel','roomSelected'))
            ->with(['messages'=>['Your reservation has been successful, please proceed to make payment',
                'Your reservation would expire in '.(Carbon::parse(($userReservation['end_date']))->diffForHumans()) . ' if you fail to make payment before then'
            ]]);

    }


}
