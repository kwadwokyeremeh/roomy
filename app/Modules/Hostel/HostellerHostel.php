<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Relations\Pivot;
use myRoommie\Hosteller;

class HostellerHostel extends Pivot
{
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
