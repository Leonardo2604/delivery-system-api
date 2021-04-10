<?php

namespace App\Exceptions;

use Exception;

class NotFoundException extends ApplicationException
{
    public function __construct(string $message, Exception $exception = null)
    {
        parent::__construct($message, 404, $exception);
    }
}
