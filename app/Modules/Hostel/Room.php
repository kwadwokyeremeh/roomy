<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function floors()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Floor');
    }

    public function beds()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Bed');
    }

    public function sexType()
    {
        return $this->hasOne('myRoommie\Modules\Hostel\SexType');
    }

    public function price()
    {
        return $this->hasOne('myRoommie\Modules\Hostel\Price');
    }
}
