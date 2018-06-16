<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    /*
     *  Get the hostel that provided the payment protocols
     * */
    public function hostel()
    {
        $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }
}
