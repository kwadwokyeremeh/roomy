<?php

namespace myRoommie\Modules;

use Illuminate\Database\Eloquent\Model;
use myRoommie\Modules\Hostel\Hostel;


class HostelRegistration extends Model
{
    protected $fillable =[
        'hosteller_id',
        'hostel_id',
        'basic_info',
        'hostel_details',
        'add_media',
        'amenities',
        'layout_n_pricing',
        'policies',
        'payment',
        'confirmation',
    ];

    protected $primaryKey ='hosteller_id';

    public function hosteller()
    {
        return $this->belongsTo('myRoommie\Hosteller');
    }

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }
}
