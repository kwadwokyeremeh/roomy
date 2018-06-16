<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    /*
     *  Get the hostel that owns this block
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }



    /*
     *  Get the floors associated with the block
     * */
    public function floors()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Floor');
    }


    /*
     *  Get the rooms associated with the block
     * */
    public function rooms()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Room');
     }


     /*
      *
      *  Get the beds associated with the block
      *
      * */
    public function beds()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Bed');
     }
}