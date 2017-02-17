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
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '1932026580352632',
    'client_secret' => '04302ed0c03a0c859ad345378080451b',
    'redirect' => 'http://localhost:8000/auth/facebook/callback',
],


    'twitter' => [
    'client_id' => 'oXc4vLnamflbK6egPESUHZ1Qt',
    'client_secret' => 'xINsfuDE5WrkkeoDp6PtV2QyJeGERvQtfHf3fo0P7QVwPsWIQH',
    'redirect' => 'http://localhost:8000/auth/twitter/callback',
],

'google' => [
    'client_id' => '81610238549-sfavdfi1k00gsqik7ddqfjmcmsdfc4t9.apps.googleusercontent.com',
    'client_secret' => '3Yb8qXRHrKYEnACQFTPxu6z4',
    'redirect' => 'http://localhost:8000/auth/google/callback',
],

];
