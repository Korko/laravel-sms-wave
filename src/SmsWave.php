<?php

namespace SmsWave;

class SmsWave
{
    private $server;

    public function __construct($server)
    {
        $this->server = $server;
    }

    public function test()
    {
        return '##'.$this->server.'##';
    }
}