<?php

namespace App\Http\Requests\Product;

use App\Traits\HasFilterRequest;
use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    use HasFilterRequest {
        validated as traitValidate;
    }
}
