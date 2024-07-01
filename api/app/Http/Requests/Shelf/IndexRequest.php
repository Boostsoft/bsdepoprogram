<?php

namespace App\Http\Requests\Shelf;

use App\Traits\HasFilterRequest;
use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
   use HasFilterRequest {
       validated as traitValidate;
   }
}
