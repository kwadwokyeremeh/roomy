<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    public function room()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Room');
    }

    public function user()
    {
        return $this->belongsTo('myRoommie\User');
    }
}
