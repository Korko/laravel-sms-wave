<?php

namespace Korko\SmsWave;

use Illuminate\Support\ServiceProvider;

class SmsWaveServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('smswave', function () {
            return new SmsWaveLibrary(env('SMSWAVE_SERVER'));
        });
    }

    public function provides()
    {
        return ['smswave'];
    }
}