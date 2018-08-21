<?php

namespace myRoommie;

use Illuminate\Database\Eloquent\Model;

class UserSocialAccount extends Model
{
    protected $fillable = [
        'provider_name', 'provider_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
