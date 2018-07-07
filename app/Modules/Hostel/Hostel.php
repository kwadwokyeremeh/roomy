<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;
use myRoommie\Modules\HostelRegistration;

class Hostel extends Model
{

    protected $fillable = [
        'name','alias',
        'number_of_blocks',
        'street_address',
        'city',
        'region', 'country',
        'latitude',
        'longitude',
        'hostel_email',
        'hostel_phone',
        'hosteller_id',
    ];

    /*
     *
     *  Get the hosteller who owns the hostel
     *
     * */
    public function hosteller()
    {
        return $this->belongsTo('\myRoommie\Modules\Hosteller');
    }

    public function hostelRegistration()
    {
        return $this->hasOne(HostelRegistration::class);
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
    public function roomDescription()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\RoomDescription');
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
    public function roomTypeMedia()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\RoomTypeMedia');
    }

    public function hostelViews()
    {
        return $this->hasMany(HostelView::class);
    }

    public function miscellaneous()
    {
        return $this->hasMany(Misc::class);
    }

    public function entertainment()
    {
        return $this->hasMany(Entertainment::class);
    }
}
