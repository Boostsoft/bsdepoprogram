<?php

namespace App\Http\Requests\Vehicle;

use App\Traits\HasFilterRequest;
use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    use HasFilterRequest {
        validated as traitValidate;
    }
}
