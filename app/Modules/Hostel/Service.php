<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /*
     *  Get the hostel that provides that services
     * */
    public function hostel()
    {
        $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }
}
