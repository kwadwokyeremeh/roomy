<?php

namespace myRoommie\Modules\Hostel;

use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

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
