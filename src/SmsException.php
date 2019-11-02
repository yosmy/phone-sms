<?php

namespace Yosmy\Phone;

use Exception;

class SmsException extends Exception
{
    /**
     * @var array
     */
    private $response;

    /**
     * @param array $response
     */
    public function __construct(array $response)
    {
        $this->response = $response;

        parent::__construct();
    }

    /**
     * @return array
     */
    public function getResponse(): array
    {
        return $this->response;
    }
}