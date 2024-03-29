<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],


    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],


    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],


    'stripe' => [
        'model' => myRoommie\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],


    'interpayafrica' => [
        'model' => myRoommie\User::class,
        'app_id' => env('INTERPAY_AFRICA_APP_ID'),
        'app_key' => env('INTERPAY_AFRICA_APP_KEY'),
        'merchant_account' => env('INTERPAY_AFRICA_MERCHANT'),
    ],


    'facebook' => [
        'client_id'     =>env('FACEBOOK_ID'),
        'client_secret' =>env('FACEBOOK_SECRET'),
        'redirect'      =>env('FACEBOOK_REDIRECT'),
    ],


    'google' => [
        'client_id'     =>env('GOOGLE_ID'),
        'client_secret' =>env('GOOGLE_SECRET'),
        'redirect'      =>env('GOOGLE_REDIRECT'),
    ],


    'linkedin' => [
        'client_id'     =>env('LINKEDIN_ID'),
        'client_secret' =>env('LINKEDIN_SECRET'),
        'redirect'      =>env('LINKEDIN_REDIRECT'),
    ],

    'nexmo' => [
        'key' => env('NEXMO_KEY'),
        'secret' => env('NEXMO_SECRET'),
        'sms_from' => env('NEXMO_SMS_FROM'),
    ],

];
