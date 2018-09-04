<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Relations\Pivot;
use myRoommie\Hosteller;

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
