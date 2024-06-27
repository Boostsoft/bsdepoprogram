<?php

namespace App\Http\Controllers\CorporateCustomer;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\CorporateCustomer\DeleteRequest;
use App\Services\CorporateCustomerService;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(DeleteRequest $request, int $id, CorporateCustomerService $corporateCustomerService)
    {
        $result = $corporateCustomerService->deleteModelById(
            $id
        );

        return ApiResponse::message($result > 0 , $result > 0 ? 'CORPORATE_CUSTOMER_DELETED' : 'CORPORATE_CUSTOMER_NOT_FOUND');

    }
}
