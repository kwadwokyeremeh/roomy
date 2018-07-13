<?php

namespace myRoommie;

use Illuminate\Database\Eloquent\Model;
use myRoommie\Modules\Hostel\Hostel;

class Comment extends Model
{
    protected $fillable =[
        'body','hostel_id','user_id'
    ];
    //comment->$hostel
    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
