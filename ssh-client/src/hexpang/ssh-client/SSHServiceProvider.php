<?php

namespace App\Providers;

use App\Services\RemoteService;
use Illuminate\Support\ServiceProvider;

class SSHServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SSHService::class, function ($app) {
            return new SSHService(
              env('SSH_HOST'),
              env('SSH_PORT'),
              env('SSH_USER'),
              env('SSH_PASSWORD')
            );
        });
    }
}
