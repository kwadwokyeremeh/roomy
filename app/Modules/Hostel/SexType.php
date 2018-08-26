<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\SexType
 *
 * @property-read \myRoommie\Modules\Hostel\Room $room
 * @mixin \Eloquent
 */
class SexType extends Model
{
    public $timestamps = false;

    /*
     *  Get the room with the sex type
     * */
    public function room()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Room');
    }
}
