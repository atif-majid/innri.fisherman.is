<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    public $table = "production";
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'product_number',
        'lot_number',
        'product_name',
        'instructions',
        'products_available_arriving',
        'packing_package_size',
        'production_total',
        'delivery_storage',
        'delivery_storage_quantity',
        'pallet_number',
        'recipe_id',
        'production_date',
        'production_unit'
    ];

}
