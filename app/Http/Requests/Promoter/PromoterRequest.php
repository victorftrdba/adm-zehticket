<?php

namespace App\Http\Requests\Promoter;

use App\Rules\ValidateCpfCnpjSize;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PromoterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check() && Auth::user()->is_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required_if:_method,POST', 'string'],
            'email' => ['sometimes', 'email', $this->isMethod('PATCH') ? '' : 'unique:promoters,email'],
            'password' => ['required_if:_method,POST', 'nullable', 'string'],
            'confirm_password' => ['required_if:_method,POST', 'nullable', 'string'],
            'is_admin' => ['required', 'boolean'],
            'cpf_cnpj' => ['required_if:_method,POST', 'numeric', new ValidateCpfCnpjSize()],
        ];
    }

    public function messages()
    {
        return [
            'name.required_if' => 'Nome é um campo obrigatório.',
            'is_admin.required' => 'É obrigatório informar se o usuário é um administrador.',
            'email.required_if' => 'E-mail é um campo obrigatório.',
            'email.email' => 'E-mail inválido.',
            'password.string' => 'Senha inválida.',
            'confirm_password.string' => 'Confirmação de senha inválida.',
            'password.required_if' => 'Senha é um campo obrigatório.',
            'confirm_password.required_if' => 'Confirmação de senha é um campo obrigatório.',
            'email.unique' => 'O e-mail já existe.',
            'cpf_cnpj.required_if' => 'CPF/CNPJ é um campo obrigatório.'
        ];
    }
}
