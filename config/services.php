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
    'client_id'     => '24fbd0edd46019058da7', //Github API
    'client_secret' => '4500e6ab7a9bb70608600fbdee37969276bb0685', //Github Secret
    'redirect'      => 'https://www.grest.in/login/github/callback',
  ],
  'google'       => [
    'client_id'     => '122886334250-fsfd8ugugkr0hjrkakukbgnnruomjn95.apps.googleusercontent.com', //Google API
    'client_secret' => 'eyuwbzXGBgbebzPXNiqSOods', //Google Secret
    'redirect'      => 'https://www.grest.in/login/google/callback',
  ],
  'facebook'     => [
    'client_id'     => '136836768489519', //Facebook API
    'client_secret' => 'e68b706f5ca9cd5e65bf0306a93d8641', //Facebook Secret
    'redirect'      => 'https://localhost:8000/login/facebook/callback',
  ],

  'paytm-wallet' => [
    'env'              => env('PAYTM_ENVIRONMENT'), // values : (local | production)
    'merchant_id'      => env('PAYTM_MERCHANT_ID'),
    'merchant_key'     => env('PAYTM_MERCHANT_KEY'),
    'merchant_website' => env('PAYTM_MERCHANT_WEBSITE'),
    'channel'          => env('PAYTM_CHANNEL'),
    'industry_type'    => env('PAYTM_INDUSTRY_TYPE'),
  ],

];
