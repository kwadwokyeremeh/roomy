<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Relations\Pivot;
use myRoommie\Hosteller;

/**
 * myRoommie\Modules\Hostel\HostellerHostel
 *
 * @property int $id
 * @property int $hosteller_id
 * @property int $hostel_id
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\HostellerHostel whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\HostellerHostel whereHostellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\HostellerHostel whereId($value)
 * @mixin \Eloquent
 */
class HostellerHostel extends Pivot
{
    protected $fillable =[
        'hostel_id','hosteller_id'
    ];



    /*
     * Not Necessary
     *
     * public function hosteller()
    {
        return $this->belongsTo(Hosteller::class);
    }

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }*/

}
