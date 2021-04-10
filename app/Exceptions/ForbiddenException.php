<?php

namespace App\Exceptions;

use Exception;

class ForbiddenException extends ApplicationException
{
    public function __construct(string $message, Exception $exception = null)
    {
        parent::__construct($message, 403, $exception);
    }
}
