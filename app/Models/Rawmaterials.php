<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawmaterials extends Model
{
    use HasFactory;
    public $table = "rawmaterials";
    public $timestamps = false;

    protected $fillable = [
        'material_name',
        'material_quantity',
        'material_unit',
        'material_lot_nr',
        'create_date_time',
        'emp_id',
        'production_id'
    ];
}
