<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }

    public function room()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Room');
    }
}
