<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

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