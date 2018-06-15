<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    public function hosteller()
    {
        return $this->belongsTo('myRoommie\Hosteller');
    }

    public function blocks()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Block');
    }

    public function facilities()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Facility');
    }

    public function services()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Service');
    }

    public function food()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Food');
    }

    public function price()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Price');
    }

    public function utilities()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Utility');
    }

    public function policies()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Policy');
    }

    public function payment()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Payment');
    }

    public function roomType()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\RoomType');
    }
}
