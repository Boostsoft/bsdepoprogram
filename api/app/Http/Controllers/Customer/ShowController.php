<?php

namespace App\Http\Controllers\Customer;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\ShowRequest;
use App\Http\Resources\CustomerResource;
use App\Services\CustomerService;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(ShowRequest $request, int $id, CustomerService  $customerService)
    {
        $order = $customerService->getModel(
          $id
        );

        return ApiResponse::data(new CustomerResource($order));

    }
}
