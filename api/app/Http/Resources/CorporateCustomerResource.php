<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CorporateCustomerResource extends JsonResource
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
            'company_type' => $this->company_type,
            'company_name' => $this->company_name,
            'tax_id' => $this->tax_id,
            'authorized_person' => $this->authorized_person,
            'city' => $this->city,
            'district' => $this->district,
            'address' => $this->address,
            'contact_number' => $this->contact_number,
            'email' => $this->email
        ];
    }
}

