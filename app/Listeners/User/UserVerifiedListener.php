<?php

namespace myRoommie\Listeners\User;

use Illuminate\Auth\Events\Verified;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use myRoommie\Mail\UserVerified;
use myRoommie\User;

class UserVerifiedListener
{
    public $user;
    /**
     * Create the event listener.
     *
     * @param User $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Handle the event.
     *
     * @param  Verified  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        $message = (new UserVerified($event->user))
            ->onQueue('emails');


        Mail::to($event->user)
            ->queue($message);
    }
}
