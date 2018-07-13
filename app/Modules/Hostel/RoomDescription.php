<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class RoomDescription extends Model
{
    protected $fillable =[
        'hostel_id',
        'room_type',
        'number_of_beds',
        'price',
    ];
     public $timestamps = false;
    /*
     *  Get the hostel that provided the prices
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

    /*
     *  Get the room that own that has that price
     * */
    public function room()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Room');
    }

    public function roomTypeMedia()
    {
        return $this->hasMany(RoomTypeMedia::class);
    }
}
