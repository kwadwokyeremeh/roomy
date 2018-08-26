<?php

namespace myRoommie;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\UserSocialAccount
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $provider_name
 * @property string|null $provider_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \myRoommie\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\UserSocialAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\UserSocialAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\UserSocialAccount whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\UserSocialAccount whereProviderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\UserSocialAccount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\UserSocialAccount whereUserId($value)
 * @mixin \Eloquent
 */
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
