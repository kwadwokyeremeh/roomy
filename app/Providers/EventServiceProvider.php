<?php

namespace myRoommie\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        /*'myRoommie\Events\Event' => [
            'myRoommie\Listeners\EventListener',
        ],*/
        /*\SocialiteProviders\Manager\SocialiteWasCalled::class => [
            // add your listeners (aka providers) here
            'SocialiteProviders\\LinkedIn\\LinkedInExtendSocialite@handle',
        ],*/
        '\Spatie\MediaLibrary\Events\MediaHasBeenAdded' => [
            'myRoommie\Listeners\MediaLogger'],
        /*'Illuminate\Auth\Events\Registered' => [
            'myRoommie\Listeners\LogRegisteredUser',
        ],

        'Illuminate\Auth\Events\Attempting' => [
            'myRoommie\Listeners\LogAuthenticationAttempt',
        ],

        'Illuminate\Auth\Events\Authenticated' => [
            'myRoommie\Listeners\LogAuthenticated',
        ],

        'Illuminate\Auth\Events\Login' => [
            'myRoommie\Listeners\LogSuccessfulLogin',
        ],

        'Illuminate\Auth\Events\Failed' => [
            'myRoommie\Listeners\LogFailedLogin',
        ],

        'Illuminate\Auth\Events\Logout' => [
            'myRoommie\Listeners\LogSuccessfulLogout',
        ],

        'Illuminate\Auth\Events\Lockout' => [
            'myRoommie\Listeners\LogLockout',
        ],

        'Illuminate\Auth\Events\PasswordReset' => [
            'myRoommie\Listeners\LogPasswordReset',
        ],*/
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
