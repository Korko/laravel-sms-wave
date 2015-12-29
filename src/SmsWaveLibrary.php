<?php

namespace Korko\SmsWave;

class SmsWaveLibrary
{
    private $server;

    public function __construct($server)
    {
        $this->server = $server;
    }

    public function send($number, $text)
    {
        Curl::simple_post($this->server, [
            'phone' => $number,
            'message' => $text,
            'submit' => "Send"
        ]);
    }
}