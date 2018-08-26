<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\RoomDescription
 *
 * @property int $id
 * @property int $hostel_id
 * @property string $room_type
 * @property int $number_of_beds
 * @property float $price
 * @property string $room_token
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Room[] $room
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\RoomTypeMedia[] $roomTypeMedia
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\RoomDescription whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\RoomDescription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\RoomDescription whereNumberOfBeds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\RoomDescription wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\RoomDescription whereRoomToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\RoomDescription whereRoomType($value)
 * @mixin \Eloquent
 */
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
        return $this->hasMany('myRoommie\Modules\Hostel\Room');
    }

    public function roomTypeMedia()
    {
        return $this->hasMany(RoomTypeMedia::class);
    }
}
