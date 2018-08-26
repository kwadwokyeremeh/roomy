<?php

namespace myRoommie\Modules\Hostel;

use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * myRoommie\Modules\Hostel\Misc
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property int $hostel_id
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Misc whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Misc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Misc whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Misc whereTitle($value)
 * @mixin \Eloquent
 */
class Misc extends Model implements HasMedia
{
    /*
     *  This model is responsible for handling all miscellaneous images associated with a hostel
     * */
    use HasMediaTrait;

    protected $table ='miscellaneous';

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['hostel'];



    protected $fillable =[
      'hostel_id','title','image',
    ];

    public $timestamps = false;

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('misc-thumb')
            ->width(639)
            ->height(500)
            ->sharpen(10);


    }
}
