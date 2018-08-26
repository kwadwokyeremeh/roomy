<?php

namespace myRoommie\Modules\Booking;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Modules\Hostel\Room;
use myRoommie\User;

class Reservation extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'token',
        'start_date',
        'end_date',
        'amount_to_be_paid',
        'hostel_id',
        'room_id',
        'payment_method_id',
        'user_id'
    ];

    /*
     *
     *  Get the reservations associated with the room
     * */

    public function room()
    {
        $this->belongsTo(Room::class);
    }

    /*
     *
     *  Get the reservations associated with the hostel
     * */
    public function hostel()
    {
        $this->belongsTo(Hostel::class);
    }

    /*
     *
     *  Get the reservations associated with the a user
     * */
    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function paymentMethod()
    {
        $this->belongsTo(PaymentMethod::class);
    }

    /*
     *  Check whether the selected room is full
     *
     * @param $room
     * @return bool $isRoomFull
     * */

    public function isRoomFull($room)
    {
        $reservedBeds = $this->where('room_id',$room)->get();
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
