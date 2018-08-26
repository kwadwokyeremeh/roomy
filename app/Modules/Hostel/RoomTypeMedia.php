<?php

namespace myRoommie\Modules\Hostel;

use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * myRoommie\Modules\Hostel\RoomTypeMedia
 *
 * @property int $id
 * @property int $room_description_id
 * @property string $image
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read \myRoommie\Modules\Hostel\RoomDescription $roomDescription
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\RoomTypeMedia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\RoomTypeMedia whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\RoomTypeMedia whereRoomDescriptionId($value)
 * @mixin \Eloquent
 */
class RoomTypeMedia extends Model implements HasMedia
{
/*
 * This model is responsible for handling all the images for
 * the type of room associated with a hostel
 * */
    use HasMediaTrait;

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

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('roomType')
            ->width(370)
            ->height(270)
            ->sharpen(10);

    }


}


