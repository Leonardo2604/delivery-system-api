<?php

namespace App\Exceptions;

use Exception;

class ApplicationException extends Exception
{
    public function __construct(string $message, int $code, Exception $exception = null)
    {
        parent::__construct($message, $code, $exception);
    }
}
