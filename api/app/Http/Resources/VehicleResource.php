<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
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
            'plate' => $this->plate,
            'chassis' => $this->chassis,
            'segment' => $this->segment,
            'brand' => $this->brand,
            'model' => $this->model,
            'fuel_type' => $this->fuel_type,
            'transmission_type' => $this->transmission_type,
            'registration_no' => $this->registration_no,
            'color' => $this->color,
            'inspection_date' => $this->inspection_date,
            'customer_type' => $this->customer_type,
            'customer' => $this->customer,
            'license' => $this->license,
        ];
    }
}
