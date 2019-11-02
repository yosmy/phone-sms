<?php

namespace Yosmy\Phone;

interface SendSms
{
    /**
     * @param string $country
     * @param string $prefix
     * @param string $number
     * @param string $text
     *
     * @throws SmsException
     */
    public function send(
        string $country,
        string $prefix,
        string $number,
        string $text
    );
}
