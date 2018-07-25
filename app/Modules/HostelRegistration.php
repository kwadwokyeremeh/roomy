<?php

namespace myRoommie\Modules;

use Illuminate\Database\Eloquent\Model;
use myRoommie\Modules\Hostel\Hostel;


class HostelRegistration extends Model
{
    protected $fillable =[
        'hosteller_id',
        'hostel_id',
        '1_basic_info',
        '2_hostel_details',
        '3_add_media',
        '4_amenities',
        '5_layout_n_pricing',
        '6_policies',
        '7_payment',
        '8_confirmation',
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
