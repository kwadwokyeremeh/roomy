<?php

namespace myRoommie\Modules\Hostel;

use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

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


