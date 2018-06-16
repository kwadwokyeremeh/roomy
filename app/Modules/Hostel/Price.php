<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    /*
     *  Get the hostel that provided the prices
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }

    /*
     *  Get the room that own that has that price
     * */
    public function room()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Room');
    }
}
