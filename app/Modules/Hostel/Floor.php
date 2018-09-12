<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\Floor
 *
 * @property int $id
 * @property int $hostel_id
 * @property int $block_id
 * @property string|null $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Bed[] $beds
 * @property-read \myRoommie\Modules\Hostel\Block $block
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Room[] $rooms
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Floor whereBlockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Floor whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Floor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Floor whereName($value)
 * @mixin \Eloquent
 */
class Floor extends Model
{

    public $timestamps = false;

    protected $fillable =[
        'hostel_id','block_id','name','number'
    ];

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['hostel'];

    /*
         *  Get the hostel that owns this floor
         * */

    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }

    /*
     *  Get the block where this floor can be located
     * */
    public function block()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Block');
    }


    /*
     *  Get the rooms associated with the floor
     * */
    public function rooms()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Room');
    }


    /*
     *  Get the beds associated with the floor
     * */
    public function beds()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Bed');
    }

    /**
     * Get the name of the floor.
     *
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value)
    {

        return ucwords($value);

    }


    /**
     * Set the name of the floor.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {

        $this->attributes['name'] = mb_strtolower($value);
    }


}
