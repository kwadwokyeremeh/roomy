<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class RoomTypeMedia extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'hostel_id','room_type','image',
    ];
    /*
     *  Get the hostel that provided the room types
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }


}
