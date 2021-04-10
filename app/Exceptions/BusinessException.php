<?php

namespace App\Exceptions;

use Exception;

class BusinessException extends ApplicationException
{
    public function __construct(string $message, int $code = 400, Exception $exception = null)
    {
        parent::__construct($message, $code, $exception);
    }
}
