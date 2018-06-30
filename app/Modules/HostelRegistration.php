<?php

namespace myRoommie\Modules;

use Illuminate\Database\Eloquent\Model;


class HostelRegistration extends Model
{
    protected $fillable =[
        'hosteller_id',
        '1_basic_info',
        '2_hostel_details',
        '3_add_media',
        '4_amenities',
        '5_layout_n_pricing',
        '6_policies',
        '7_payment',
        '8_confirmation',
    ];

    public function hosteller()
    {
        return $this->belongsTo('myRoommie\Hosteller');
    }
}
