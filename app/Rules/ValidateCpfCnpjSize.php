<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidateCpfCnpjSize implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (strlen($value) === 11 || strlen($value) === 14) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O CPF/CNPJ deve ter um tamanho de 11 ou 14 caracteres.';
    }
}
