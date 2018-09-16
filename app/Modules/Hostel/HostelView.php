<?php

namespace myRoommie\Modules\Hostel;


use Illuminate\Database\Eloquent\Model;

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
class HostelView extends Model
{
    /*
     *  This model is responsible for handling
     *  all views associated with a hostel
     * */



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





}




