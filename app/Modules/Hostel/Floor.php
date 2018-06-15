<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    public function blocks()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Block');
    }

    public function rooms()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Room');
    }
}
