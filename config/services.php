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

    'google' => [
        'client_id'     => env('GOOGLE_ID'),
        'client_secret' => env('GOOGLE_SECRET'),
        'redirect'      => env('GOOGLE_REDIRECT')
    ],
    'firebase' => [
      'api_key' => 'AIzaSyCf0N-I_sffDX3uJaNfVj0Or1qhTDzw6Cw', // Only used for JS integration
      'auth_domain' => 'awakin-162908.firebaseapp.com', // Only used for JS integration
      'database_url' => 'https://awakin-162908.firebaseio.com',
      'secret' => 'OapA8rvGStwbiTeNP6IGDVDGsW91rys9pwTur0D7',
      'storage_bucket' => 'awakin-162908.appspot.com', // Only used for JS integration
    ]

];