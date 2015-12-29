<?php

namespace Korko\SmsWave;

use Illuminate\Support\Facades\Facade;

class SmsWaveFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'smswave';
    }
}