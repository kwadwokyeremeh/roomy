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
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }
}
