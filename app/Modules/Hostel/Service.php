<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;

    protected $fillable =[
        'hostel_id','service'
    ];
    /*
     *  Get the hostel that provides that services
     * */
    public function hostel()
    {
        $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }
}
