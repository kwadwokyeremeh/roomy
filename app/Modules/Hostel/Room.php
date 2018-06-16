<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
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
     * Get the Sex type associated with the room
     * */
    public function sexType()
    {
        return $this->hasOne('myRoommie\Modules\Hostel\SexType');
    }


    /*
     *  Get the price associated with the room
     * */
    public function price()
    {
        return $this->hasOne('myRoommie\Modules\Hostel\Price');
    }


}
