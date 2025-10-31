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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'abacatepay' => [
        'api_key' => env('ABACATEPAY_API_KEY'),
    ],

    'highlevel' => [
        'key' => env('HIGHLEVEL_ACCESS_KEY_ID'),
        'secret' => env('HIGHLEVEL_SECRET_ACCESS_KEY'),
        'location' => env('HIGHLEVEL_DEFAULT_LOCATION', 'us-east-1'),
        'pipeline' => env('HIGHLEVEL_DEFAULT_PIPELINE', 'miSaf2ppCkOQd6icQu9e'),
        'version' => env('HIGHLEVEL_API_VERSION', '2021-07-28'),
        'company' => env('HIGHLEVEL_COMPANY_ID', 'qaCJB3XmO2nXwz6GeQbk'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'google' => [
        'analytics_debug' => env('GOOGLE_ANALYTICS_DEVELOPER_MODE', true),
    ],

];
