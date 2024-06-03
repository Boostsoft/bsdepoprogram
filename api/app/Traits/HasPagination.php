<?php

namespace App\Traits;
use  \Illuminate\Pagination\LengthAwarePaginator;

trait HasPagination
{

    protected function paginate(LengthAwarePaginator $result): array
    {
        return [
            'total' => $result->total(),
            'perPage' => $result->perPage(),
            'currentPage' => $result->currentPage(),
            'lastPage' => $result->lastPage(),
            'from' => $result->firstItem(),
            'to' => $result->lastItem()
        ];
    }
}
