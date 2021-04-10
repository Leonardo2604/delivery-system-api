<?php

namespace App\Validators\Contracts;

use Illuminate\Contracts\Validation\Validator;

interface ValidatorInterface
{
    function validate(array $data): Validator;
}
