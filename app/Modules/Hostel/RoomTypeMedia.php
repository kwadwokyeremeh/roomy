<?php

namespace myRoommie\Modules\Hostel;


use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\RoomTypeMedia
 *
 * @property int $id
 * @property int $room_description_id
 * @property string $image
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @property-read \myRoommie\Modules\Hostel\RoomDescription $roomDescription
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\RoomTypeMedia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\RoomTypeMedia whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\RoomTypeMedia whereRoomDescriptionId($value)
 * @mixin \Eloquent
 */
class RoomTypeMedia extends Model
{
/*
 * This model is responsible for handling all the images for
 * the type of room associated with a hostel
 * */


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table ='room_type_media';


    /*
     * This model does not implement timestamps
     * */

    public $timestamps = false;

    protected $fillable = [
        'hostel_id','room_type','image',
    ];
    /*
     *  Get the hostel that provided the room types
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


    public function roomDescription()
    {
        return $this->belongsTo(RoomDescription::class);
    }



}


