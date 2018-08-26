<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\Entertainment
 *
 * @property int $id
 * @property string $entertainment
 * @property int $hostel_id
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Entertainment whereEntertainment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Entertainment whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Entertainment whereId($value)
 * @mixin \Eloquent
 */
class Entertainment extends Model
{
    public $timestamps = false;


    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['hostel'];


    protected $fillable = [
        'hostel_id','entertainment',
    ];

    public function hostel()
    {
        $this->belongsTo(Hostel::class);
    }
}
