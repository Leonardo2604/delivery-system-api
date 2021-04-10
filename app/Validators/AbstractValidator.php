<?php

namespace App\Validators;

use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;

abstract class AbstractValidator
{
    public function validate(array $data): ValidationValidator
    {
        return FacadesValidator::make($data, $this->rules($data), $this->messages());
    }

    protected abstract function rules(array $data): array;
    protected abstract function messages(): array;
}
