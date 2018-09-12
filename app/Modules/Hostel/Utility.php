<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\Utility
 *
 * @property int $id
 * @property string $utility
 * @property int $hostel_id
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Utility whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Utility whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Utility whereUtility($value)
 * @mixin \Eloquent
 */
class Utility extends Model
{
    public $timestamps = false;

    protected $fillable =[
        'hostel_id','uutility'
    ];
    /*
     *  Get the hostel that provide that utilities
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

    /**
     * Get the name of the utility.
     *
     * @param  string  $value
     * @return string
     */
    public function getUtilityAttribute($value)
    {

        return ucwords($value);

    }


    /**
     * Set the name of the utility.
     *
     * @param  string  $value
     * @return void
     */
    public function setUtilityAttribute($value)
    {

        $this->attributes['utility'] = mb_strtolower($value);
    }

}
