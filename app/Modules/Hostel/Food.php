<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'hostel_id','food',
    ];

    /*
     *  Get the hostel that provides that food and drink services
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }
}
