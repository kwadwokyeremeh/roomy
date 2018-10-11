<?php

namespace myRoommie\Http\Controllers\Booking;



use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use myRoommie\Modules\Booking\Reservation;
use Illuminate\Http\Request;
use myRoommie\Modules\Hostel\Room;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Http\Controllers\Controller;
use myRoommie\Modules\Hostel\RoomDescription;
use myRoommie\Http\Middleware\IsReservationAllowed;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    protected $reservation;
    protected $data;
    protected $userReservation;

    public function __construct(Reservation $reservation)
    {
        $this->reservation =$reservation;

        $this->middleware(['auth:web,hosteller',IsReservationAllowed::class]);


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

    /**
     * @param \Illuminate\Http\Request $request
     * @param  $hostelName
     * @param  $room_token
     * @param  Reservation $reservation
     * @return \Illuminate\Http\Response
     *
     * */
    public function saveProgress($hostelName, $room_token, Request $request, Reservation $reservation)
    {
        $hostel =Hostel::whereSlug($hostelName)
            //->orWhere('slug', $hostelName)
            ->with(['blocks','floors','rooms','beds','roomDescription','reservationDate'])
            ->firstOrFail();
        /**
         *  Checking if the route uri is booking or room token
         * */
        if ($room_token=='booking'){
            $roomType = [];
        }else{
            $roomType = $hostel->roomDescription()->whereRoomToken($room_token)->firstOrFail();

        }

        //$this->validate($request,['selectedRoom' => ['numeric','required',]], ['required' => 'Please select a room']);
        $v = Validator::make($request->all(),
            ['selectedRoom' => ['numeric','required',]],
            ['required' => 'Please select a room']);
        $v->validate();
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

        /**
         *  Persist the data to the database
         *  @param \Illuminate\Http\Request $request
         * */
        $user =auth('web')->user();
        $request->session()->put('selectedRoom',$request['selectedRoom']);
        $roomSelected =$hostel->rooms()->where('id',$request['selectedRoom'])->lockForUpdate()->firstOrFail();


        /**
                 * Retrieve hostel default reservation date
                 * */

        $duration = $hostel->retrieveDuration();
        $price =$reservation->sumAmount($roomSelected);
        $this->data =[
            'token'             =>mb_strtoupper(uniqid()),
            'start_date'        =>now()->toDateTimeString(),
            'end_date'          =>$duration->toDateTimeString(),
            'amount_to_be_paid' =>$price,
            'status'            =>false,
            'hostel_id'         =>$hostel->id,
            'room_id'           =>$roomSelected->id,
            'user_id'           =>$user->id,

        ];
        /**
         *  Check if the selected room is having a gender associated with it
         * */
        if ($roomSelected->sex_type == 'No Gender'){
            $roomSelected->update(['sex_type'=>auth('web')->user()->sex]);

            DB::transaction(function (){
                $this->reservation->firstOrCreate($this->data);
            });
        }
        elseif ($roomSelected->sex_type == auth('web')->user()->sex){

            DB::transaction(function (){
                $this->reservation->firstOrCreate($this->data);
            });

        }
        else{

            return redirect()->back()->withErrors(['errors'=>'Sorry the selected room is for the opposite sex']);
        }

        /*if ($reservation->isRoomFull(\request(['selectedRoom'])) == true){
            return redirect($request->getRequestUri())
                ->withErrors($v)
                ->withInput();
        }else{
            //DB::transaction(function (){});
        }*/


        \request()->session()->regenerate();


        session()->flash('message');
        return view('individualHostel.booking.04_payment',compact('hostel','room_token','roomSelected'))
            ->with(['messages'=>
                ['Your reservation has been successful, please proceed to make payment',
                    'Your reservation would expire in '. $duration->diffForHumans(). ' if you fail to make payment before then'
                ]]);

    }




    /**
     * Un-reserve a user reservation
     * Same as edit a reservation
     *
     * @param \Illuminate\Http\Request $request
     * @param  $hostelName
     * @param  $room_token
     * @param  Reservation $reservation
     * @return \Illuminate\Http\Response
     *
     **/
    public function unReserveBed($hostelName, Request $request, Reservation $reservation, $room_token)
    {

    $hostel = Hostel::findHostel($hostelName);
    $unReserveBed = $this->reservation->whereUserId(auth('web')->id())->latest()->firstOrFail();
    //Count if the number of occupants in the room is zero, unset the room gender
        $room =$unReserveBed['room_id'];
        $unReserveBed->forceDelete();
        $count = $this->reservation->whereRoomId($room)->count();
        if ($count == 0){
            $hostel->rooms()->whereId($room)->update(['sex_type'=>null]);
        }


    session()->flash('unreserve','You bed have been successfully unreserved, Select a room to proceed');
          //$this->saveProgress($hostelName, $room_token, $request, $reservation);
    return redirect()->back();
        //view('individualHostel.booking.03_selectRoom',compact('hostel','reservation'));

    }


    /*
     * Redirect user to his/her previous reservation process
     * */

    /*public function previousReservation($hostelName,$room_token,Reservation $reservation)
    {

        $this->userReservation =$this->reservation->whereUserId(auth('web')->id())->latest()->firstOrFail();
        $hostel =Hostel::whereId($this->userReservation['hostel_id'])->firstOrFail();

        $roomSelected =$hostel->rooms()->where('id',$this->userReservation['room_id'])->firstOrFail();
        session()->flash('message');
        return view('individualHostel.booking.04_payment',compact('hostel','roomSelected'))
            ->with(['messages'=>['Your reservation has been successful, please proceed to make payment',
                'Your reservation would expire in '.(Carbon::parse(($this->userReservation['end_date']))->diffForHumans()) . ' if you fail to make payment before then'
            ]]);

    }*/

    public function proceedToMakePayment(Request $request,$hostelName,$room_token,Reservation $reservation)
    {
        if (URL::hasValidSignature($request)){
            $this->userReservation =$this->reservation->whereUserId(auth('web')->id())->latest()->firstOrFail();
            $hostel =Hostel::whereId($this->userReservation['hostel_id'])->firstOrFail();

            $roomSelected =$hostel->rooms()->where('id',$this->userReservation['room_id'])->firstOrFail();
            session()->flash('message');
            return view('individualHostel.booking.04_payment',compact('hostel','roomSelected'))
                ->with(['messages'=>['Your reservation has been successful, please proceed to make payment',
                    'Your reservation would expire in '.(Carbon::parse(($this->userReservation['end_date']))->diffForHumans()) . ' if you fail to make payment before then'
                ]]);
        }

        return abort(498);

    }

}
