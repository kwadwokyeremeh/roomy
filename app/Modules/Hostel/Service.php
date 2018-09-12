<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\Service
 *
 * @property int $id
 * @property string $service
 * @property int $hostel_id
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Service whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Service whereService($value)
 * @mixin \Eloquent
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 */
class Service extends Model
{
    public $timestamps = false;

    protected $fillable =[
        'hostel_id','service'
    ];
    /*
     *  Get the hostel that provides that services
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
     * Get the name of the service.
     *
     * @param  string  $value
     * @return string
     */
    public function getServiceAttribute($value)
    {

        return ucwords($value);

    }


    /**
     * Set the name of the service.
     *
     * @param  string  $value
     * @return void
     */
    public function setServiceAttribute($value)
    {

        $this->attributes['service'] = mb_strtolower($value);
    }

}
