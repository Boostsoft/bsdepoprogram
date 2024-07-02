<?php

namespace App\Http\Requests\Vehicle;

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
        return [
            'plate' => 'required|string|max:255',
            'chassis' => 'required|string|max:255',
            'segment' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'fuel_type' => 'required|string|max:255',
            'transmission_type' => 'required|string|max:255',
            'registration_no' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'inspection_date' => 'required|date',
            'customer_type' => 'required|string|in:kurumsal,bireysel',
            'customer' => 'required|string|max:255',
            'license' => 'required|string|max:255',
        ];
    }
}
