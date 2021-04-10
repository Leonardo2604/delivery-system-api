<?php

namespace App\Exceptions;

class UnprocessableEntityException extends ApplicationException
{
    private $errors;

    public function __construct(array $errors)
    {
        $this->errors = $errors;
        parent::__construct('', 422, null);
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
