<?php

namespace App\Http\Controllers\Shelf;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Shelf\DeleteRequest;
use App\Services\ShelfService;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(DeleteRequest $request, int $id, ShelfService  $shelfService)
    {
        $result = $shelfService->deleteModelById(
            $id
        );

        return ApiResponse::message($result > 0, $result > 0 ? 'SHELF DELETED' : 'SHELF NOT DELETED');
    }
}
