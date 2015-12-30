<?php

namespace Korko\SmsWave;

use Curl;

class SmsWaveLibrary
{
    private $server;

    public function __construct($server)
    {
        $this->server = $server;
    }

    public function send($number, $text)
    {
        $curl = Curl::ssl();

        $curl->simple_post($this->server, [
            'phone' => preg_replace('#^0#', '+33', $number),
            'message' => $text,
            'submit' => "Send"
        ]);
    }
}