<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Request;

class UserStoreRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'surname' => ['required','string'],
            'email' => ['required','email'],
            'password' => ['required','string'],
            'phone_number' => ['required','string']
        ];
    }
}
