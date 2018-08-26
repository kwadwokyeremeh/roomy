<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\Block
 *
 * @property int $id
 * @property int $hostel_id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Bed[] $beds
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Floor[] $floors
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Room[] $rooms
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Block whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Block whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Block whereName($value)
 * @mixin \Eloquent
 */
class Block extends Model
{
    public $timestamps = false;


    protected $fillable =[
        'hostel_id','number','name'
    ];
    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['hostel'];

    /*
         *  Get the hostel that owns this block
         * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }



    /*
     *  Get the floors associated with the block
     * */
    public function floors()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Floor');
    }


    /*
     *  Get the rooms associated with the block
     * */
    public function rooms()
    {
        return $this->hasManyThrough(Room::class, Floor::class);
     }
/*
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }*/

     /*
      *
      *  Get the beds associated with the block
      *
      * */
    public function beds()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Bed');
     }
}
