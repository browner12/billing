<?php namespace browner12\billing;

use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider
{
    /**
     * bind the interface to the implementation
     */
    public function register()
    {
        $this->app->bind('App\Billing\BillingInterface', 'App\Billing\StripeBilling');
    }

}
