<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\Food
 *
 * @property int $id
 * @property string $food
 * @property int $hostel_id
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Food whereFood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Food whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Food whereId($value)
 * @mixin \Eloquent
 */
class Food extends Model
{
    public $timestamps = false;

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['hostel'];


    protected $fillable = [
        'hostel_id','food',
    ];

    /*
     *  Get the hostel that provides that food and drink services
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }
}
