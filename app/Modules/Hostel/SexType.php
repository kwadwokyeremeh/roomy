<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class SexType extends Model
{

    /*
     *  Get the room with the sex type
     * */
    public function room()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Room');
    }
}
