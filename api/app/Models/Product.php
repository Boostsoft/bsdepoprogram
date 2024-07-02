<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable =
        [
            'stock_code',
            'name',
            'product_brand',
            'part_type',
            'unit',
            'car_type',
            'photo'
        ];

    public function productBrand()
    {
        return $this->belongsTo(ProductBrand::class, 'product_brand', 'name');
    }
}
