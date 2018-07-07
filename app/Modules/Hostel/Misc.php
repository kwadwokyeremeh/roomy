<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

class Misc extends Model
{
    public $table ='misc';
    protected $fillable =[
      'hostel_id','title','image',
    ];

    public $timestamps = false;

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }
}
