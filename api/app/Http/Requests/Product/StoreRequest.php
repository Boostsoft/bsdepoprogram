<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'stock_code' => 'required|string',
            'name' => 'required|string',
            'product_brand' => 'required|string',
            'part_type' => 'required|string',
            'unit' => 'required|string',
            'car_type' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048'
        ];
    }
}
