<?php

namespace App\Http\Requests\ProductBrand;

use App\Http\Requests\Request;
use App\Traits\HasFilterRequest;

class IndexRequest extends Request
{

    use HasFilterRequest {
        validated as traitValidate;
    }

}
