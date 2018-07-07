<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class HostelView extends Model
{
    public $timestamps = false;

    protected $fillable = [
      'hostel_id','front','right','left','video'
    ];


    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
}
}
