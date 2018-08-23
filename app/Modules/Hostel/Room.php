<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;
use myRoommie\Modules\Booking\Reservation;

class Room extends Model
{

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['hostel'];


    public $timestamps = false;
    /*
     *  Get the hostel that owns the room
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }

    /*
     *  Get the block that this room can be located on
     * */
    public function block()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Block');
    }


    /*
     *  Get the floor where the room can be located
     * */
    public function floor()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Floor');
    }



    /*
     *  Get the beds in that room
     *  Get the beds associated with the room
     * */
    public function beds()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Bed');
    }

    /*
     *  Get the reservations in that room
     *  Get the reservations associated with the room
     * */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }


    /*
     *  Get the reservations in that room
     *  Get the reservations associated with the room
     *  The booking and reservation is the same but for the sake of security,
     *  redundancy is important
     *
     * */
    public function bookings()
    {
        $this->hasMany(Booking::class);
    }


    /*
     * Get the Sex type associated with the room
     * */
    public function sexType()
    {
        return $this->hasOne('myRoommie\Modules\Hostel\SexType');
    }


    /*
     *  Get the price associated with the room
     * */
    public function roomDescription()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\RoomDescription');
    }

    /**
     * Get the genderlity of a room.
     *
     * @param  string  $value
     * @return string
     */
    public function getSexTypeAttribute($value)
    {
        if ($value=='M'){
            $value='Male';
        }elseif ($value=='F'){
            $value ='Female';
        }else{
            $value='';
        }
        return $value;

    }


    public function isBooked()
    {

    }

    public function isReservationAllowed()
    {

    }
}
