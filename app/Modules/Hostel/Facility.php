<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\Facility
 *
 * @property int $id
 * @property string $facility
 * @property int $hostel_id
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Facility whereFacility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Facility whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Facility whereId($value)
 * @mixin \Eloquent
 */
class Facility extends Model
{
    public $timestamps = false;

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['hostel'];



    protected $fillable =[
        'hostel_id','facility',
    ];

    /*
     *  Get the hostel that own the facilities
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }

    /**
     * Get the name of the facility.
     *
     * @param  string  $value
     * @return string
     */
    public function getFacilityAttribute($value)
    {

        return ucwords($value);

    }


    /**
     * Set the name of the facility.
     *
     * @param  string  $value
     * @return void
     */
    public function setFacilityAttribute($value)
    {

        $this->attributes['facility'] = mb_strtolower($value);
    }

}
