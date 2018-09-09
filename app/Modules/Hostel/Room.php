<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;
use myRoommie\Modules\Booking\Reservation;

/**
 * myRoommie\Modules\Hostel\Room
 *
 * @property int $id
 * @property int $hostel_id
 * @property int|null $block_id
 * @property int $floor_id
 * @property int $room_description_id
 * @property string|null $name
 * @property string $number
 * @property string $sex_type
 * @property int $status
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Bed[] $beds
 * @property-read \myRoommie\Modules\Hostel\Block|null $block
 * @property-read \myRoommie\Modules\Hostel\Floor $floor
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Booking\Reservation[] $reservations
 * @property-read \myRoommie\Modules\Hostel\RoomDescription $roomDescription
 * @property-read \myRoommie\Modules\Hostel\SexType $sexType
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Room whereBlockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Room whereFloorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Room whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Room whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Room whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Room whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Room whereRoomDescriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Room whereSexType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Room whereStatus($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Booking[] $bookings
 */
class Room extends Model
{

    protected $fillable =['sex_type'];
    /**
     * All of the relationships to be touched.
     *
     * @var array
     */


    protected $touches = ['hostel'];


    public $timestamps = false;
    /*
     *  Get the hostel that owns the room
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }

    /*
     *  Get the block that this room can be located on
     * */
    public function block()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Block');
    }


    /*
     *  Get the floor where the room can be located
     * */
    public function floor()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Floor');
    }



    /*
     *  Get the beds in that room
     *  Get the beds associated with the room
     * */
    public function beds()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Bed');
    }

    /*
     *  Get the reservations in that room
     *  Get the reservations associated with the room
     * */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }


    /*
     *  Get the reservations in that room
     *  Get the reservations associated with the room
     *  The booking and reservation is the same but for the sake of security,
     *  redundancy is important
     *
     * */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }


    /*
     * Get the Sex type associated with the room
     * */
    public function sexType()
    {
        return $this->hasOne('myRoommie\Modules\Hostel\SexType');
    }


    /*
     *  Get the price associated with the room
     * */
    public function roomDescription()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\RoomDescription');
    }

    /**
     * Get the genderlity of a room.
     *
     * @param  string  $value
     * @return string
     */
    public function getSexTypeAttribute($value)
    {
        if ($value=='M'){
            $value='Male';
        }elseif ($value=='F'){
            $value ='Female';
        }else{
            $value='No Gender';
        }
        return $value;

    }


    /**
     * Set the genderlity of a room.
     *
     * @param  string  $value
     * @return void
     */
    public function setSexTypeAttribute($value)
    {
        if ($value == 'Male'){
            $v = 'M';
        }elseif ($value == 'Female'){
            $v = 'F';
        }else{
            $v = null;
        }

        $this->attributes['sex_type'] = $v;
    }

    public function isBooked()
    {

    }

    public function isReservationAllowed()
    {

    }
}
