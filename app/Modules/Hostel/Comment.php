<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;
use myRoommie\User;

/**
 * myRoommie\Modules\Hostel\Comment
 *
 * @property int $id
 * @property int $user_id
 * @property int $hostel_id
 * @property string $message
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @property-read \myRoommie\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Comment whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Comment whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Comment whereUserId($value)
 * @mixin \Eloquent
 */
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
