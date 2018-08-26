<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\Policy
 *
 * @property int $id
 * @property string $tenancy
 * @property string $smoking
 * @property string|null $other
 * @property string $room_cancellation
 * @property int $hostel_id
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Policy whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Policy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Policy whereOther($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Policy whereRoomCancellation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Policy whereSmoking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Policy whereTenancy($value)
 * @mixin \Eloquent
 */
class Policy extends Model
{

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['hostel'];


    public $timestamps = false;
    /*
     *  Get the hostel that own the policies
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }
}
