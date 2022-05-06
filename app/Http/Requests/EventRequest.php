<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:120|unique:events',
            'description' => 'required|string',
            'image' => 'required',
            'value' => 'required|string',
            'date' => 'required|date',
            'expires' => 'required|date',
            'amount' => 'required|string',
            'address' => 'required|string',
        ];
    }
}
