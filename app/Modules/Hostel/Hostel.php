<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{

    /*
     *
     *  Get the hosteller who owns the hostel
     *
     * */
    public function hosteller()
    {
        return $this->belongsTo('myRoommie\Hosteller');
    }


    /*
     *  Get the blocks associated with the hostel
     * */
    public function blocks()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Block');
    }


    /*
     *  Get the floors associated with the hostel
     * */
    public function floors()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Floor');
    }


    /*
     *  Get the rooms  associated with the hostel
     * */
    public function rooms()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Room');
    }


    /*
     *  Get the beds associated with the hostel
     * */
    public function beds()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Bed');
    }


    /*
     *  Get the facilities associated with the hostel
     * */
    public function facilities()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Facility');
    }


    /*
     *  Get the services associated with the hostel
     * */
    public function services()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Service');
    }


    /*
     *  Get the Food and Drinks services associated with the hostel
     * */
    public function food()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Food');
    }


    /*
     *  Get the Prices associated with the hostel
     * */
    public function prices()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Price');
    }


    /*
     * Get utilities associated the hostel
     * */
    public function utilities()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Utility');
    }


    /*
     * Get policies associated the hostel
     * */
    public function policies()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Policy');
    }


    /*
     * Get payment protocols associated the hostel
     * */
    public function payment()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Payment');
    }


    /*
     * Get room types associated the hostel
     * */
    public function roomTypes()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\RoomType');
    }
}
