<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{

    public $timestamps = false;

    protected $fillable =[
        'hostel_id','block_id','name','number'
    ];

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['hostel'];

    /*
         *  Get the hostel that owns this floor
         * */

    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }

    /*
     *  Get the block where this floor can be located
     * */
    public function block()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Block');
    }


    /*
     *  Get the rooms associated with the floor
     * */
    public function rooms()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Room');
    }


    /*
     *  Get the beds associated with the floor
     * */
    public function beds()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Bed');
    }

}
