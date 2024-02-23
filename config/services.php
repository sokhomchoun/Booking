<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '361520259257-0c205l0btgmo87tdq68ose1cqifrh863.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8008/auth/google/callback'
    ],
    'facebook' => [
        'client_id' => '696550509277349',
        'client_secret' => 'f6d23a895354759dfb63d29ac4a652bc',
        'redirect' => 'http://localhost:8008/auth/facebook/callback'
    ],

];
