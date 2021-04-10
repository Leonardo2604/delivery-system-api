<?php

namespace App\Exceptions;

use Exception;

class DatabaseException extends ApplicationException
{
    public function __construct(string $message, Exception $exception = null)
    {
        parent::__construct($message, 500, $exception);
    }
}
