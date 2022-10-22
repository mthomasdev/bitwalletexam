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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'binance' => [
        'key'       =>  env('BINANCE_ACCESS_KEY', 'xxxxx'),
        'secret'    =>  env('BINANCE_SECRET_KEY', 'xxxxx'),
        'baseUrl'   =>  env('BINANCE_BASEURL', 'https://api.binance.com/api/v3/'),
        'timeout'   =>  env('BINANCE_TIMEOUT', 10),
    ],

    'bittrex' => [
        'key'       =>  env('BITTREX_ACCESS_KEY', 'xxxxx'),
        'secret'    =>  env('BITTREX_ACCESS_KEY', 'xxxxx'),
        'baseUrl'   =>  env('BINANCE_BASEURL', 'https://api.bittrex.com/v3/'),
        'timeout'   =>  env('BINANCE_TIMEOUT', 10),
    ],

    

];
