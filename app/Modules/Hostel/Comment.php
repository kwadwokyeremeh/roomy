<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;
use myRoommie\User;

class Comment extends Model
{
    protected $fillable =[
        'body','hostel_id','user_id','message'
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
