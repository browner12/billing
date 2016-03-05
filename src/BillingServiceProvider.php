<?php namespace browner12\billing;

use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider
{
    /**
     * bind the interface to the implementation
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('browner12\billing\BillingInterface', config('billing.provider'));
    }

    /**
     * boot
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/billing.php' => config_path('billing.php'),
        ]);
    }
}
