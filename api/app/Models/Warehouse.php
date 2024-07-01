<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $table = 'warehouse';

    protected $fillable = [
        'name',
        'city',
        'district',
        'square_meters'
    ];

    public function shelves()
    {
        return $this->hasMany(Shelf::class, 'warehouse_name', 'name');
    }
}
