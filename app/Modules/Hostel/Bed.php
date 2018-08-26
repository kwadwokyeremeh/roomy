<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\Bed
 *
 * @property int $id
 * @property int $hostel_id
 * @property int $block_id
 * @property int $floor_id
 * @property int $room_id
 * @property int|null $user_id
 * @property int $status
 * @property-read \myRoommie\Modules\Hostel\Block $block
 * @property-read \myRoommie\Modules\Hostel\Floor $floor
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @property-read \myRoommie\Modules\Hostel\Room $room
 * @property-read \myRoommie\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Bed whereBlockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Bed whereFloorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Bed whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Bed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Bed whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Bed whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Bed whereUserId($value)
 * @mixin \Eloquent
 */
class Bed extends Model
{
    public $timestamps = false;
    /*
     * Get the Hostel that owns the bed
     * */
    public function hostel()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }

    /*
     * Get the Block that this bed can found
     * */
    public function block()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Block');
    }

    /*
     * Get the  Floor that this bed can be found
     * */
    public function floor()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Floor');
    }

    /*
     * Get the Room that has this bed
     * */
    public function room()
    {
        return $this->belongsTo('myRoommie\Modules\Hostel\Room');
    }

    /*
     * Get the user that has booked the bed for that academic year
     * */
    public function user()
    {
        return $this->belongsTo('myRoommie\User');
    }
}
