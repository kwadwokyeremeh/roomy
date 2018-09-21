<?php

namespace myRoommie\Observers;

use myRoommie\User;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \myRoommie\User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \myRoommie\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \myRoommie\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \myRoommie\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \myRoommie\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
