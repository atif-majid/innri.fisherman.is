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
        'recipe_id',
        'product_number',
        'lot_number',
        'order_number',
        'quantity_estimate',
        'quantity_estimate_unit',
        'quantity_scaled',
        'quantity_scaled_unit',
        'create_date_time',
        'emp_id',
        'completed',
        'production_site',
        'production_date',
        'complete_date_time'
    ];

}
