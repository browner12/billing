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
    'default' => env('BILLING_SERVICE'),

];
