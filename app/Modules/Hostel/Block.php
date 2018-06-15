<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Block');
    }

    public function floors()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Floor');
    }
}
