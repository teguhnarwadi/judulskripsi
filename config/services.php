<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
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
        'client_id' => '726559150819098',
        'client_secret' => '88a67ac688505f3161c905587eff8de7',
        'redirect' => 'http://localhost:8000/callback/facebook',
    ],

    'twitter' => [
        'client_id' => 'kVT2tbU4yRMhrIFCbOlDzDn1j',
        'client_secret' => 'EsE1GyEIjDPLVyPzgfX6rPJ1M0OMSS9hNPkA6UeYHne5uLI4KX',
        'redirect' => 'http://localhost:8000/callback/twitter',
    ],

];
