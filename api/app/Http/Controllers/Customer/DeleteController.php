<?php

namespace App\Http\Controllers\Customer;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\DeleteRequest;
use App\Services\CustomerService;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(DeleteRequest $request, int $id, CustomerService  $customerService)
    {
        $result = $customerService->deleteModelById(
            $id
        );

        return ApiResponse::message($result > 0 , $result > 0 ? 'CUSTOMER_DELETED' : 'CUSTOMER_NOT_FOUND');

    }
}
