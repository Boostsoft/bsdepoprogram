<?php

namespace App\Http\Requests\CorporateCustomer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'company_type' => 'required|string|in:şahıs,kurumsal',
            'company_name' => 'required|string',
            'tax_id' => 'required|string|unique:corporate_customers,tax_id',
            'authorized_person' => 'required|string',
            'city' => 'required|string',
            'district' => 'required|string',
            'address' => 'required|string',
            'contact_number' => 'required|string',
            'email' => 'required|email|unique:corporate_customers,email'
        ];

        if ($this->company_type === 'şahıs') {
            $rules['tckn'] = 'required|string';
        } else {
            $rules['tckn'] = 'nullable|string';
        }

        return $rules;
    }
}
