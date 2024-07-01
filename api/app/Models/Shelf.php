<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    use HasFactory;

    protected $table = 'shelves';

    protected $fillable = [
        'warehouse_name',
        'block',
        'shelf',
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'warehouse_name', 'name');
    }
}
