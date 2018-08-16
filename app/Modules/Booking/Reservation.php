<?php

namespace myRoommie\Modules\Booking;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;

    public function reservation()
    {
        return true;

    }


}
