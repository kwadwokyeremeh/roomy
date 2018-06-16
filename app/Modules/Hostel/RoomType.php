<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    /*
     *  Get the hostel that provided the room types
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }
}
