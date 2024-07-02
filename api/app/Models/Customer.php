<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'tckn',
        'city',
        'district',
        'address',
        'contact_number',
        'email',
        'driver_license'
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'customer', 'name');
    }
}
