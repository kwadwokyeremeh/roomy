<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Horizon Redis Connection
    |--------------------------------------------------------------------------
    |
    | This is the name of the Redis connection where Horizon will store the
    | meta information required for it to function. It includes the list
    | of supervisors, failed jobs, job metrics, and other information.
    |
    */

    'use' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Horizon Redis Prefix
    |--------------------------------------------------------------------------
    |
    | This prefix will be used when storing all Horizon data in Redis. You
    | may modify the prefix when you are running multiple installations
    | of Horizon on the same server so that they don't have problems.
    |
    */

    'prefix' => env('HORIZON_PREFIX', 'horizon:'),

    /*
    |--------------------------------------------------------------------------
    | Queue Wait Time Thresholds
    |--------------------------------------------------------------------------
    |
    | This option allows you to configure when the LongWaitDetected event
    | will be fired. Every connection / queue combination may have its
    | own, unique threshold (in seconds) before this event is fired.
    |
    */

    'waits' => [
        'redis:default' => 60,
    ],

    /*
    |--------------------------------------------------------------------------
    | Job Trimming Times
    |--------------------------------------------------------------------------
    |
    | Here you can configure for how long (in minutes) you desire Horizon to
    | persist the recent and failed jobs. Typically, recent jobs are kept
    | for one hour while all failed jobs are stored for an entire week.
    |
    */

    'trim' => [
        'recent' => 60,
        'failed' => 10080,
    ],

    /*
    |--------------------------------------------------------------------------
    | Queue Worker Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may define the queue worker settings used by your application
    | in all environments. These supervisors and settings handle all your
    | queued jobs and will be provisioned by Horizon during deployment.
    |
    */

    'environments' => [
        'production' => [
            'supervisor-1' => [
                'connection' => 'redis',
                'queue' => ['default','image'],
                'balance' => 'auto',
                'processes' => 10,
                'tries' => 3,
            ],
                'supervisor-2' => [
                    'connection'=> "redis",
                    'queue'=> "notifications,emails",
                    'processes' => 4,
                    'delay'=> 0,
                    'memory'=> 128,
                    'timeout'=> 60,
                    'sleep'=> 3,
                    'maxTries'=> 0,
                    'balance'=> "auto", // could be simple, auto, or null
                    'force'=> false,
                ],
        ],


        'local' => [
            'supervisor-1' => [
                'connection' => 'redis',
                'queue' => ['default','image','notifications,emails'],
                'balance' => 'auto',
                'maxProcesses'=> 5,
                'minProcesses'=> 1,
                'delay'=> 0,
                'memory'=> 128,
                'timeout'=> 60,
                'sleep'=> 3,
                'maxTries'=> 0,
                'processes' => 6,
                'tries' => 3,
            ],
        ],
    ],
];
