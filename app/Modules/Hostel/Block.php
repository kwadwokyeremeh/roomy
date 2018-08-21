<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    public $timestamps = false;


    protected $fillable =[
        'hostel_id','number','name'
    ];
    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['hostel'];

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
        return $this->hasManyThrough(Room::class, Floor::class);
     }
/*
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }*/

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
