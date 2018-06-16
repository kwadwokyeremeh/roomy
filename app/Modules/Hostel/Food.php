<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    /*
     *  Get the hostel that provides that food and drink services
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }
}
