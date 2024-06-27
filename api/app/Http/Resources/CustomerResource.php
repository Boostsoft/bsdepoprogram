<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'name' => $this->name,
            'surname' => $this->surname,
            'tckn' => $this->tckn,
            'city' => $this->city,
            'district' => $this->district,
            'address' => $this->address,
            'contact_number' => $this->contact_number,
            'email' => $this->email,
            'driver_license' => $this->driver_license
        ];
    }
}
