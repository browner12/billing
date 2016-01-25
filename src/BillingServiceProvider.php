<?php namespace browner12\billing;

use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider
{
    /**
     * bind the interface to the implementation
     */
    public function register()
    {
        $this->app->bind('browner12\billing\BillingInterface', 'browner12\billing\StripeBilling');
    }

    /**
     * boot
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/billing.php' => config_path('billing.php'),
        ]);
    }

}
