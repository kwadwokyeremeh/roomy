<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    /*
     * Get the Hostel that owns the bed
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }

    /*
     * Get the Block that this bed can found
     * */
    public function block()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Block');
    }

    /*
     * Get the  Floor that this bed can be found
     * */
    public function floor()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Floor');
    }

    /*
     * Get the Room that has this bed
     * */
    public function room()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Room');
    }

    /*
     * Get the user that has booked the bed for that academic year
     * */
    public function user()
    {
        return $this->belongsTo('myRoommie\User');
    }
}
