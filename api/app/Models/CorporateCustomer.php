<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateCustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_type',
        'company_name',
        'tax_id',
        'tckn',
        'authorized_person',
        'city',
        'district',
        'address',
        'contact_number',
        'email'
    ];
}
