<?php

namespace SmsWave;

use Illuminate\Support\ServiceProvider;

class SmsWaveServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config.php' => config_path('smswave.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('smswave', function () {
            return new SmsWave(config('smswave.server'));
        });
    }
}