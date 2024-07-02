<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'stock_code' => $this->stock_code,
            'name' => $this->name,
            'product_brand' => $this->product_brand,
            'part_type' => $this->part_type,
            'unit' => $this->unit,
            'car_type' => $this->car_type,
            'photo' => $this->photo

        ];
    }
}
