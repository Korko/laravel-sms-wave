<?php

namespace Korko\SmsWave;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class SmsWaveServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register('Unikent\Curl\Providers\CurlServiceProvider');
        AliasLoader::getInstance()->alias('Curl', 'Unikent\Curl\Facades\Curl');

        $this->app->singleton('smswave', function () {
            return new SmsWaveLibrary(env('SMSWAVE_SERVER'));
        });
    }

    public function provides()
    {
        return ['smswave'];
    }
}