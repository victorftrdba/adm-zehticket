<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['sometimes', 'string'],
            'password' => ['required_if:_method,POST', 'nullable', 'string'],
            'confirm_password' => ['required_if:_method,POST', 'nullable', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'password.string' => 'Senha inválida.',
            'confirm_password.string' => 'Confirmação de senha inválida.'
        ];
    }
}
