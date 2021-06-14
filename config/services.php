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

  'mailgun'      => [
    'domain'   => env('MAILGUN_DOMAIN'),
    'secret'   => env('MAILGUN_SECRET'),
    'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
  ],

  'postmark'     => [
    'token' => env('POSTMARK_TOKEN'),
  ],

  'ses'          => [
    'key'    => env('AWS_ACCESS_KEY_ID'),
    'secret' => env('AWS_SECRET_ACCESS_KEY'),
    'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
  ],
  'github'       => [
    'client_id'     => '59a235c0dfccb493e9a4', //Github API
    'client_secret' => 'cd300a9726f38e1b0b454c318e3c69e8d1a5eab9', //Github Secret
    // 'redirect'      => 'https://www.grest.in/login/github/callback',
    'redirect'      => 'https://localhost:8000/login/github/callback',
  ],
  'google'       => [
    'client_id'     => '96620334621-piqerdfktup24cbakqbeba70316ndq6a.apps.googleusercontent.com', //Google API
    'client_secret' => 'hai1OorhJFCez4Xg5tgwtIeW', //Google Secret
    'redirect'      => 'https://localhost:8000/login/google/callback',
  ],
  // 'facebook'     => [
  //   'client_id'     => '136836768489519', //Facebook API
  //   'client_secret' => 'e68b706f5ca9cd5e65bf0306a93d8641', //Facebook Secret
  //   'redirect'      => 'https://localhost:8000/login/facebook/callback',
  // ],
    'facebook'    => [
      'client_id'     => env('FACEBOOK_CLIENT_ID'),
      'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
      'redirect'      => 'https://www.grest.in/login/facebook/callback',
  ],

  'paytm-wallet' => [
    'env'              => env('PAYTM_ENVIRONMENT', 'local'), // values : (local | production)
    'merchant_id'      => env('PAYTM_MERCHANT_ID', 'GVRrvi89826148642567'),
    'merchant_key'     => env('PAYTM_MERCHANT_KEY', 'zupVstOLP5iguPV9'),
    'merchant_website' => env('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING'),
    'channel'          => env('PAYTM_CHANNEL', 'WEB'),
    'industry_type'    => env('PAYTM_INDUSTRY_TYPE', 'Retail'),
  ],

];
