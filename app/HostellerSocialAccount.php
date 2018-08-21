<?php

namespace myRoommie;

use Illuminate\Database\Eloquent\Model;

class HostellerSocialAccount extends Model
{
    protected $fillable = [
        'provider_name', 'provider_id'
    ];

    public function hosteller()
    {
        return $this->belongsTo(Hosteller::class);
    }
}
