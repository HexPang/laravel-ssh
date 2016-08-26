<?php

namespace hexpang\Providers;

use hexpang\Client\SSH\SSHClient;
use Illuminate\Support\ServiceProvider;

class SSHClientProvider extends ServiceProvider
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
        $this->app->singleton(SSHClient::class, function ($app) {
            return new SSHClient(
              env('SSH_HOST'),
              env('SSH_PORT'),
              env('SSH_USER'),
              env('SSH_PASSWORD')
            );
        });
    }
}
