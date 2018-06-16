<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{

    /*
     *  Get the hostel that own the policies
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }
}
