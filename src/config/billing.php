<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Billing Service
    |--------------------------------------------------------------------------
    |
    | Select the third party billing service you will be using.
    |
    | Supported: 'stripe', 'paypal', 'authorize'
    |
    */

    'default' => '',

    /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    |
    | Set the API key of your selected billing service.
    |
    */

    'api_key' => env('BILLING_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Currency
    |--------------------------------------------------------------------------
    |
    | Set the currency you will charge in. Use the ISO 4217 code.
    |
    */

    'currency' => 'usd',

];
