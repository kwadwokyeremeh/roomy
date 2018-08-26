<?php

namespace myRoommie\Modules\Hostel;

use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\File;
use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * myRoommie\Modules\Hostel\HostelView
 *
 * @property int $id
 * @property int $hostel_id
 * @property string $front
 * @property string $right
 * @property string $left
 * @property string|null $video
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\HostelView whereFront($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\HostelView whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\HostelView whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\HostelView whereLeft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\HostelView whereRight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\HostelView whereVideo($value)
 * @mixin \Eloquent
 */
class HostelView extends Model implements HasMedia
{
    /*
     *  This model is responsible for handling
     *  all views associated with a hostel
     * */

    use HasMediaTrait;

    public $timestamps = false;

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['hostel'];


    protected $fillable = [
      'hostel_id','front','right','left','video'
    ];


    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }


/*
 *  This method applies media conversion to the uploaded multimedia files
 * */

    public function registerMediaCollections()
    {
        $this
            ->addMediaCollection('hostel-views')
            ->registerMediaConversions(function (Media $media =null) {
                $this->addMediaConversion('front-thumb')
                    ->width(370)
                    ->height(270)
                    ->sharpen(10);

                $this->addMediaConversion('slider-front')
                    ->width(1920)
                    ->height(940)
                    ->sharpen(10);

                $this->addMediaConversion('slider-side')
                    ->width(1920)
                    ->height(940)
                    ->sharpen(10);

                $this->addMediaConversion('slider-other')
                    ->width(1920)
                    ->height(940)
                    ->sharpen(10);

            });
    }



}




