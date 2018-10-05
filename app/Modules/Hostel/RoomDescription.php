<?php

namespace myRoommie\Modules\Hostel;

use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

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
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property string|null $deleted_at
 * @property-read mixed $urls
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\myRoommie\Modules\Hostel\RoomDescription onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\RoomDescription whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\myRoommie\Modules\Hostel\RoomDescription withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\myRoommie\Modules\Hostel\RoomDescription withoutTrashed()
 */
class RoomDescription extends Model  implements HasMedia
{

    use HasMediaTrait;


    protected $fillable =[
        'hostel_id',
        'room_type',
        'number_of_beds',
        'price',
        'room_token',
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


    /**
     * Get the name of the room type.
     *
     * @param  string  $value
     * @return string
     */
    public function getRoomTypeAttribute($value)
    {

        return ucwords($value);

    }


    /**
     * Set the name of the room type.
     *
     * @param  string  $value
     * @return void
     */
    public function setRoomTypeAttribute($value)
    {

        $this->attributes['room_type'] = mb_strtolower($value);
    }

    public function registerMediaCollections()
    {
        /*
 * This is responsible for handling all the images for
 * the type of room associated with a hostel
 * */
        $this
            ->addMediaCollection('roomType')
            ->registerMediaConversions(function (Media $media = null) {
                $this->addMediaConversion('room_type')
                    ->width(370)
                    ->height(270)
                    ->sharpen(10);
            });
    }


    public function getUrlsAttribute()
    {
        $roomType= $this->getMedia('roomType')->map(function (Media $media){
        return $media->getUrl('room_type');
    });

        return $roomType;
        //return $this->getFirstMediaUrl('roomType','room_type');
    }

    public function removeItemById($collectionName)
    {
        $this->getMedia($collectionName)
            ->reject(function (Media $currentMediaItem) {
                return in_array($currentMediaItem->id, $this->getMedia('roomType')->toArray());
            })
            ;
 }

}
