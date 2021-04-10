<?php

namespace App\Exceptions;

use Exception;

class UnauthorizedException extends ApplicationException
{
    public function __construct(string $message, Exception $exception = null)
    {
        parent::__construct($message, 401, $exception);
    }
}
