<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    public $timestamps = false;

    protected $fillable =[
        'hostel_id','utilities'
    ];
    /*
     *  Get the hostel that provide that utilities
     * */

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['hostel'];


    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }
}
