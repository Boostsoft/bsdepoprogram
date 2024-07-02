<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate',
        'chassis',
        'segment',
        'brand',
        'model',
        'fuel_type',
        'transmission_type',
        'registration_no',
        'color',
        'inspection_date',
        'customer_type',
        'customer',
        'license',
    ];
}
